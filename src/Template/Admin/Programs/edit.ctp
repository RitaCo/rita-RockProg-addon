<?php
   $this->Rita->setPageCaption('مدیریت برنامه‌ها')
   ->setPageCaption('برنامه')
   ->setPageCaption('ویرایش');
   $this->Rita->setPageNote('شما همکنون می‌توانید سایر فیلد‌های مورد نیاز را تکمیل نمایید.');
   
   $deadline = is_object($Program->deadline)? $Program->deadline->i18nFormat("yyyy-MM-dd",null, 'en_IR') : null;
   $event = is_object($Program->event)? $Program->event->i18nFormat("yyyy-MM-dd",null, 'en_IR') : null;
   
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($Program); ?>
       
		<div class="body-container ">
            <div class="group-inputs">   
            <?=  $this->Form->input('title',['label' => 'عوان برنامه']); ?>
                <div class="form-col">
                    <?= $this->Form->input('category_id', ['options' => $Categories, 'label' => 'گروه', 'empty' => '[انتخاب کنید]']); ?>            
                    <?= $this->Form->input('type_id', ['options' => $Types, 'label' => 'فعالیت', 'empty' => '[انتخاب کنید]']); ?>
                </div>
            </div>
            <div class="group-inputs">                            
                
                    <?=  $this->Form->input('price',['label' => 'هزینه'] )?>
                
                <div class="form-col">
                    <?=  $this->Form->input('supervior_id',['options' => $Superviors, 'label' => 'سرپرست', 'empty' => '[انتخاب کنید]']);; ?>
                    <?=  $this->Form->input('status', ['options' => $status]); ?>
                </div>
                <div class="form-col">

                     <?=  $this->Form->input('event', ['label' => 'تاریخ برنامه']); ?>
                     <?php  //$this->Form->input('deadline', ['label' => 'تاریخ ثبت نام']); ?>
                     <?=  $this->Form->input('deadline', ['label' => 'deadline -'.\Cake\I18n\Time::$defaultLocale]); ?>
                </div>
                
            </div>
            <div class="group-inputs">                               
            <?php

        $type = 'date';

?>
                     <?=  $this->Form->input('deadline1', ['label' => 'deadline -en_us', 'locale' => 'en_US', 'calendar' => 'persian','type' => $type ,'value' => $Program->deadline]); ?>

                     <?=  $this->Form->input('deadline2', ['label' => 'deadline -ps_AF', 'locale' => 'ps_AF','calendar' => 'persian','timezone'=>'Asia/Kabul','type' => $type,'value' => $Program->deadline]); ?>
                     <?=  $this->Form->input('deadline3', ['label' => 'deadline -fa_AF' , 'locale' => 'fa_AF','type' => $type,'value' => $Program->deadline]); ?>
     

                     <?=  $this->Form->input('deadline4', ['label' => 'deadline - th_TH', 'locale' => 'th_TH' , 'type' => $type,'value' => $Program->deadline]); ?>
                     <?=  $this->Form->input('deadline5', ['label' => 'deadline -es_ES' , 'locale' => 'es_ES','type' => $type,'value' => $Program->deadline]); ?>
                     <?=  $this->Form->input('deadline34', ['label' => 'deadline -fa_IR@calendar=islamic', 'locale' => 'fa_IR@calendar=islamic' , 'type' => $type,'value' => $Program->deadline]); ?>
                     <?=  $this->Form->input('deadline5', ['label' => 'deadline - 	ar_IQ' , 'locale' => 'ar_IQ@calendar=islamic','type' => $type,'value' => $Program->deadline]); ?>
                     <?=  $this->Form->input('deadline6', ['label' => 'deadline - 	defualt' , 'type' => $type,'value' => $Program->deadline]); ?>
                     <?=  $this->Form->input('deadline63', [
                        'label' => 'deadline - 	ja-JP', 
                        'locale' => 'ja-JP',
                        'timezone' => 'Asia/Tokyo', 
                         'calendar' => 'japanese',
                        'type' => $type,'value' => $Program->deadline]); ?>
                     <?=  $this->Form->input('deadline633', [
                        'label' => 'deadline - 	iw_IL', 
                        'locale' => 'iw_IL', 
//                        'calendar' => 'persian', 
                        'type' => $type,'value' => $Program->deadline
                        ]); ?>
       
     
            </div>
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>


