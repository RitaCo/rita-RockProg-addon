<?php
   $this->Rita->setPageCaption('مدیریت برنامه‌ها')
   ->setPageCaption('برنامه')
   ->setPageCaption('ویرایش');
   $this->Rita->setPageNote('شما همکنون می‌توانید سایر فیلد‌های مورد نیاز را تکمیل نمایید.');
   
   //$deadline = is_object($Program->deadline)? $Program->deadline->i18nFormat("yyyy-MM-dd",null, 'en_IR') : null;
   //$event = is_object($Program->event)? $Program->event->i18nFormat("yyyy-MM-dd",null, 'en_IR') : null;
   
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($Program); ?>
       
		<div class="body-container ">
            <div class="group-inputs">   
            <?=  $this->Form->input('title',['label' => 'عنوان برنامه']); ?>
                <div class="form-col">
                    <?= $this->Form->input('category_id', ['options' => $Categories, 'label' => 'گروه', 'empty' => '[انتخاب کنید]']); ?>            
                    <?= $this->Form->input('type_id', ['options' => $Types, 'label' => 'فعالیت', 'empty' => '[انتخاب کنید]']); ?>
                </div>
            </div>
            <div class="group-inputs">                            
            
                    <?=  $this->Form->input('price',['label' => 'هزینه', 'type' => 'number'] )?>
                
                <div class="form-col">
                    <?=  $this->Form->input('supervior_id',['options' => $Superviors, 'label' => 'سرپرست', 'empty' => '[انتخاب کنید]']);; ?>
                    <?=  $this->Form->input('status', ['options' => $status ,'label' => 'وضعیت برنامه']); ?>
                </div>
                <div class="form-col">

                     <?=  $this->Form->input('event', ['label' => 'تاریخ برنامه']); ?>
                     <?=  $this->Form->input('deadline', ['label' => 'تاریخ ثبت نام']); ?>
                    <?=  $this->Form->input('detail.id'); ?>
                </div>
                
            </div>
            <div class="group-inputs">                            
                <div class=" border-none ui-tab tab__pos-right">
                    <ul class="tab--nav">
                        <li class="nav--item active" data-tab="tab1"><a >درباره برنامه</a></li>
                        <li class="nav--item " data-tab="tab2"><a >مکان برنامه</a></li>
                        <li class="nav--item " data-tab="tab3"><a >نیازمندی‌ها</a></li>
                        <li class="nav--item" data-tab="tab4"><a>توضیحات اضافه</a></li>
                        <li class="nav--item" data-tab="tab5"><a >نیازها</a></li>
                    </ul>
                    <div class="tab--container">
                        <div id="tab1" class="tab--body active padding-none">
                            <?=  $this->Form->input('detail.about', ['label' => false]); ?>
                        </div>
                        <div id="tab2" class="tab--body padding-none">
                            <?=  $this->Form->input('detail.location', ['label' => false]); ?>
                        </div>
                        <div id="tab3" class="tab--body padding-none">
                             <?=  $this->Form->input('detail.accessories', ['label' => false]); ?>
                        </div>
                        <div id="tab4" class="tab--body padding-none">
                            <?=  $this->Form->input('detail.conditions', ['label' => false]); ?>
                        </div>                        
                        <div id="tab5" class="tab--body padding-none">
                           <?=  $this->Form->input('detail.note', ['label' =>false]); ?>
                        </div>
                    </div>
                </div>
                
            </div>           
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>

<script type="text/javascript">
var cfg={
    toolbar: 'lite'
};
CKEDITOR.replace( 'detail-about', cfg );
CKEDITOR.replace( 'detail-location', cfg );
CKEDITOR.replace( 'detail-accessories', cfg );
CKEDITOR.replace( 'detail-conditions', cfg );
CKEDITOR.replace( 'detail-note', cfg );

</script>
