@extends('users.layout')

@section('admin')

<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px ">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Form-->
        <form class="form" action="#" id="kt_modal_add_customer_form" data-kt-redirect="#">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_customer_header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Place Order</h2>
                <!--end::Modal title-->
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-10 px-lg-17">
                <!--begin::Scroll-->
                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold mb-2">Company Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Phone No.</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="tel" class="form-control form-control-solid" placeholder="" name="phone number" value="" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-5 mt-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold">16 grams: </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" class="form-control form-control-solid w-150px h-25px d-inline-block" placeholder="" name="number" value="" />
                        <!--end::Input-->
                    </div>
                    <div class="fv-row mb-10 mt-10">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">22 grams: </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" class="form-control form-control-solid w-150px h-25px d-inline-block" placeholder="" name="number" value="" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                        <!--begin::Modal title-->
                        <div class="fv-row mb-10 mt-10">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">2kg Spicy Tomato: </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" class="form-control form-control-solid w-150px h-25px d-inline-block" placeholder="" name="number" value="" />
                        <!--end::Input-->
                    </div>
                    <div class="fv-row mb-10 mt-10">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">2kg Spicy Beef: </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="number" class="form-control form-control-solid w-150px h-25px d-inline-block" placeholder="" name="number" value="" />
                        <!--end::Input-->
                    </div>
                </div>
                <!--end::Scroll-->
            </div>
            <!--end::Modal body-->
            <!--begin::Modal footer-->
            <div class="modal-footer flex-center">
                <!--begin::Button-->
                <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Modal footer-->
        </form>
        <!--end::Form-->
    </div>
</div>
</div>
@endsection