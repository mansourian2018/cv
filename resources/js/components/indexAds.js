import React, {Component,setState} from 'react';
import ReactDOM from 'react-dom';
import Modal from 'react-bootstrap/Modal';
import {Link, Redirect, withRouter} from 'react-router-dom';
import Axios from 'axios';

const imgStyle={
        height:'100px',
        width:'100px'
    }
class IndexAds extends Component{
	constructor(props) {
		super(props);
        this.handleDelete = this.handleDelete.bind(this);
        this.handleShow = this.handleShow.bind(this);
		this.state = {
            show: false,
            id:''
		};
	}
    handleDelete(){
        Axios.delete(window.location.href+'/'+this.state.id).then(response=>{
            alert(response.data['success']);
            window.location.href = window.location.href;
        })
        .error(response=>{
            alert('با خطا مواجه شد.');
            window.location.href = window.location.href;
        })
        // window.location.href=window.location.href+'/'+this.state.id;
    }
    handleShow(state,dataId){
        this.setState({show : state,id:dataId});
    }
    render() {
        var data = window.ads;
        let counter = 0;
        return(
            <>
            <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                   <a class="btn btn-primary left" href='ads/create' >ایجاد</a>
                   <label> لیست تبلیغات</label>
                </div>
                <div class="card-body text-right">
                    <table class="table table-striped table-dark" dir="rtl">
                        <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>اولویت</th>
                                <th>تصویر</th>
                                <th>توضیح</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
           { data.map((data)=>
                <tr>
                <td>{++counter}</td>
                <td>{(data.priority)?'اولویت بالا':'اولویت پایین'}</td>
                <td><img style={imgStyle} src={'/ads/image/'+data.img} /></td>
                <td>{data.text}</td>
                <td>
                <input type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" onClick={()=>this.handleShow(true,data.id)} value="حذف" />
                <label style={{width: 10}}></label>
                <a href={"/admin/ads/"+data.id+"/edit"}class="btn btn-primary" >ویرایش</a>
                </td>
                </tr>
            )}
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            <Modal id="deleteModal"
            show = {this.state.show}
            onHide ={() => this.handleShow(false)}
            dialogClassName="modal-90w"
            aria-labelledby="example-custom-modal-styling-title"
          >
            <Modal.Header closeButton >
              <Modal.Title style={{marginLeft:'40%'}}>
              <p  style={modalStyle}> حذف تبلیغ!</p>
              </Modal.Title>
            </Modal.Header>
            <Modal.Body>
              <p style={modalStyle} >
                آیا از حذف این مورد مطمئن هستید؟
              </p>
            </Modal.Body>
            <Modal.Footer>
            <div style={{marginRight:'70%'}}>
            <input type="submit" onClick={()=>{this.handleDelete()}} class="btn btn-danger" value="حذف"/>
            <input type="submit" class="btn btn-light" value="بستن"/>
            </div>
            </Modal.Footer>
          </Modal>
          </>
          );
    }
}
export default IndexAds;
if (document.getElementById('indexAds')) {
    ReactDOM.render(<IndexAds />, document.getElementById('indexAds'));
}
const modalStyle={
  textAlign:'right',
}
