// $Id: cell_inf_hex8.h,v 1.3 2004-07-14 19:23:17 jwpeterson Exp $

// The libMesh Finite Element Library.
// Copyright (C) 2002-2004  Benjamin S. Kirk, John W. Peterson
  
// This library is free software; you can redistribute it and/or
// modify it under the terms of the GNU Lesser General Public
// License as published by the Free Software Foundation; either
// version 2.1 of the License, or (at your option) any later version.
  
// This library is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
// Lesser General Public License for more details.
  
// You should have received a copy of the GNU Lesser General Public
// License along with this library; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA



#ifndef __cell_inf_hex8_h__
#define __cell_inf_hex8_h__

// C++ includes

// Local includes
#include "libmesh_config.h"
#ifdef ENABLE_INFINITE_ELEMENTS

#include "cell_inf_hex.h"




/**
 * The \p InfHex8 is an infinite element in 3D composed of 8 nodes.
 * It is numbered like this:
   \verbatim                
  INFHEX8: 7        6                             z^  / y
           o        o    closer to infinity        | /
           :        |                              |/ 
           :        |                              +----> x
      4    :   5    |           
       o   :    o   |           
       |   o....|...o 2         
       |  .3    |  /            
       | .      | /             
       |.       |/       base face
       o--------o               
       0        1               
                             
   \endverbatim
 */

// ------------------------------------------------------------
// InfHex8 class definition
class InfHex8 : public InfHex
{
public:

  /**
   * Constructor.  By default this element has no parent.
   */
  InfHex8  (const Elem* p=NULL);
    
  /**
   * @returns 8.  The \p InfHex8 has 8 nodes.
   */
  unsigned int n_nodes() const { return 8; }

  /**
   * @returns \p INFHEX8
   */
  ElemType     type() const { return INFHEX8; }

  /**
   * @returns 1
   */
  unsigned int n_sub_elem() const { return 1; }
  
  /**
   * @returns FIRST
   */
  Order        default_order() const { return FIRST; }
  
  /**
   * Returns a \p QUAD4 built coincident with face 0, an \p INFQUAD4 
   * built coincident with faces 1 to 4. Note that the \p AutoPtr<Elem>
   * takes care of freeing memory.  Here, this method is the same as 
   * the \p InfHex::side(i).
   */
  AutoPtr<Elem> build_side (const unsigned int i) const
  { AutoPtr<Elem> ap(this->side(i)); return ap; }

  virtual void connectivity(const unsigned int sc,
			    const IOPackage iop,
			    std::vector<unsigned int>& conn) const;

//   void tecplot_connectivity(const unsigned int sc,
// 			    std::vector<unsigned int>& conn) const;
  
//   void vtk_connectivity(const unsigned int,
// 			std::vector<unsigned int>*) const
//   { error(); }
  
  unsigned int vtk_element_type (const unsigned int) const
  { return 12; }
  
  /**
   * @returns \p true when this element contains the point
   * \p p.  Customized for infinite elements, since knowledge
   * about the envelope can be helpful.
   */
  bool contains_point (const Point& p) const;
  
  
protected:
  
  
#ifdef ENABLE_AMR

  /**
   * Matrix used to create the elements children.
   */
  float embedding_matrix (const unsigned int i,
			  const unsigned int j,
			  const unsigned int k) const
  { return _embedding_matrix[i][j][k]; }

  /**
   * Matrix that computes new nodal locations/solution values
   * from current nodes/solution.
   */
  static const float _embedding_matrix[4][8][8];
    
#endif

};



// ------------------------------------------------------------
// InfHex8 class member functions
inline
InfHex8::InfHex8(const Elem* p) :
  InfHex(InfHex8::n_nodes(), p) 
{
}



#endif  // ifdef ENABLE_INFINITE_ELEMENTS

#endif
