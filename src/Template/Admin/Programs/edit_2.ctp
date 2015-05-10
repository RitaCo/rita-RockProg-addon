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
                    <div class="com-input">
                        <div class="input-container">
                            <label for="event">تاریخ برنامه</label>
                            <div id="eventDate"></div>
                            <?= $this->Form->hidden('event',[
                                'id' => 'event',
                                'value' =>   $event 
                            ]); ?>        
                        </div>
                    
                    </div>
                    <div class="com-input">
                        <div class="input-container">
                            <label for="deadline">مهلت ثبت‌نام</label>
                            <div id="deadlineDate"></div>
                            <?= $this->Form->hidden('deadline',[
                                'id' => 'deadline',
                                'value' =>   $deadline
                            ]); ?>        
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




<?= $this->Html->css('Rita/Tools.calendars/jquery.calendars.picker.css'); ?>
<?= $this->Html->script('Rita/Tools.calendars/jquery.plugin.min.js'); ?>
<?= $this->Html->script('Rita/Tools.calendars/jquery.calendars.all.min.js'); ?>
<?= $this->Html->script('Rita/Tools.calendars/jquery.calendars.plus.js'); ?>
<?= $this->Html->script('Rita/Tools.calendars/jquery.calendars.persian.js'); ?>
<?= $this->Html->script('Rita/Tools.calendars/jquery.calendars.persian-fa.js'); ?>
<?= $this->Html->script('Rita/Tools.calendars/jquery.calendars.picker-fa.js'); ?>
<?= $this->Html->script('Rita/Tools.calendars/jquery.calendars-fa.js'); ?>

<script>
var per = $.calendars.instance('persian', 'fa');
var gre = $.calendars.instance('gregorian');

$('#eventDate').calendarsPicker(
    $.extend({
        
        calendar: per,
         autoSize: true,
         defaultDate:  '<?= $event?>',
         dateFormat :'yyyy-mm-dd',
         showOnFocus: true,
         
         //altField: '#publish',
         onSelect : function(date){
            
            var xx= per.parseDate('yyyy-mm-dd', date).toJD();
            //xx = gre.fromJD(xx);
            $('#event').val(date.toString());
         },
         onShow: function(picker, calendar, inst){
            console.log([picker,calendar,inst]);
         }    
        }, 
        $.calendarsPicker.regionalOptions['fa'])
   
);

$('#deadlineDate').calendarsPicker(
    $.extend({
        
        calendar: per,
         autoSize: true,
         defaultDate:  '<?= $deadline?>',
         dateFormat :'yyyy-mm-dd',
         showOnFocus: true,
         
         //altField: '#publish',
         onSelect : function(date){
            console.log(date.toString());
            var xx= per.parseDate('yyyy-mm-dd', date).toJD();
            
            xx = gre.fromJD(xx);
            $('#deadline').val(date.toString());
         },
         onShow: function(picker, calendar, inst){
            console.log([picker,calendar,inst]);
         }    
        }, 
        $.calendarsPicker.regionalOptions['fa'])
   
);


</script>