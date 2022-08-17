$.fn.extend({
    treed: function (o) {

        var openedClass = 'fas fa-minus fa-lg';
        var closedClass = 'fas fa-plus fa-lg';

        if (typeof o != 'undefined'){
            if (typeof o.openedClass != 'undefined'){
                openedClass = o.openedClass;
            }
            if (typeof o.closedClass != 'undefined'){
                closedClass = o.closedClass;
            }
        };

        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
        tree.find('.branch .indicator').each(function(){
            $(this).on('click', function () {
                $(this).closest('li').click();
            });
        });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                if ($(this).attr('href') !== null) {
                    // redirect
                    console.log('redirect');
                    window.location.href = this.attr('href');
                } else {
                    $(this).closest('li').click();
                    e.preventDefault();
                }
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
         //   $(this).css("background-color", "lightgray");
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();

            });
        });
    }
});

//Initialization of treeviews

$('#tree1').treed();

$('#tree2').treed({openedClass:'fas fa-minus fa-lg lightgreyiconcolor', closedClass:'fas fa-plus fa-lg lightgreyiconcolor'});

$('#tree3').treed({openedClass:'fas fa-angle-right fa-lg lightgreyiconcolor', closedClass:'fas fa-angle-down fa-lg lightgreyiconcolor'});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$('#bb').focus(function () {$('#dd').show(3000)
});
$('#bb').blur(function () {$('#dd').hide(3000).css({
    backgroundColor:'red'
})});
/*

$('#expandall').click(function () {$('#allchildren').show()});
$('#collapseall').click(function () {$('#allchildren').hide()});
$("li").parent().toggleClass("bg-gray-400");
    $("li").parent().mouseleave(function (){$(this).removeClass('bg-gray-300')});
    $(".box").on("hover", function() {
    $(this).first().addClass("bg-red-200");
    return false;
});
$('#expandall').click(function () {$('#allchildren').addClass('block')
return false});
$('#collapseall').click(function () {$('#allchildren').removeClass('block').addClass('hidden')});
*/



// mousehover
/*
$('li.treess').mouseover(function(e)
{e.stopPropagation();$(this).addClass('currentHover');});
$('li.treess').mouseout(function() {$(this).removeClass('currentHover');});
*/
//$.fn.select2.defaults.set( "theme", "bootstrap" );


// select2 test
/*
$(document).ready(function() {
    $('#selectMulty').select2({
        placeholder: "Select your country",
        closeOnSelect: false,
        allowClear: true});});

$(document).ready(function() {
    $('#single').select2({
        placeholder: "Select your country",
        allowClear: true,
        theme: "classic"
    });
});
$(document).ready(function() {
    $('#warehouse').select2({
        placeholder: "Select your warehouse",
        allowClear: true,
        theme: "classic"
    });
});
$(document).ready(function() {$('#invoiceList').select2({
    placeholder: "select Invoice type",
    allowClear: true,
    theme: "classic"});});
$(document).ready(function() {$('#branch').select2({
    placeholder: "Select Branch",
    allowClear: true,
    theme: "classic"});});
$(document).ready(function() {$('#costcenter').select2({
    placeholder: "Cost-Center",
    allowClear: true,
    theme: "classic"});});
$(document).ready(function() {$('#accounts').select2({
    placeholder: "Account-Name",
    allowClear: true,
    theme: "classic"});});
$(document).ready(function() {$('#relations').select2({
    placeholder: "Additional-Relation",
    allowClear: true,
    theme: "classic"});});
$(document).ready(function() {$('#sales_rep').select2({
    placeholder: "Sales-Rep-Name",
    allowClear: true,
    theme: "classic"});});
$(document).ready(function() {$('#contractNum').select2({
    placeholder: "Contract-Number",
    allowClear: true,
    theme: "classic"});})
$(document).ready(function() {$('#currency').select2({
    placeholder: "Select-Currency",
    allowClear: true,
    theme: "classic"});})
$(document).ready(function() {$('#test2').select2({
    placeholder: "Select-province",
    allowClear: true,
    theme: "classic"});})
$(document).ready(function() {$('#category').select2({
    placeholder: "Select-country",
    allowClear: true,
    theme: "classic"});})
$(document).ready(function() {$('#subcategory').select2({
    placeholder: "Select-province",
    allowClear: true,
    theme: "classic"});})
$(document).ready(function() {$('#city1').select2({
    placeholder: "Select-city",
    allowClear: true,
    theme: "classic"});})

$(document).ready(function() {$('#neighborhood1').select2({
    placeholder: "Select-neighborhood",
    allowClear: true,
    theme: "classic"});})

$(document).ready(function() {$('#country1').select2({
    placeholder: "Select-country",
    allowClear: true,
    width: '100%',
    });})

$(document).ready(function() {$('#city3').select2({
    placeholder: "Select-city",
    allowClear: true,
    width: '100%',
    theme: "classic"});})
*/

/*
$(document).ready(function() {$('#province').select2({
    placeholder: "Select-province",
    allowClear: true,
    theme: "classic"});})

*/

/*
function select2Alpine() {
    this.select2 = $(this.$refs.select).select2();
    this.select2.on("select2:select", (event) => {
        this.selectedCity = event.target.value;
    });
    this.$watch("selectedCity", (value) => {
        this.select2.val(value).trigger("change");
    });
}


// hack select2
$("#selectMulty").on({
    "select2:select": function(e) {
        $("li[aria-selected='true']").addClass("customclass");
        $("li[aria-selected='false']").removeClass("customclass");
    },
    "select2:opening": function(e) {
        setTimeout(function(){
            $("li[aria-selected='true']").addClass("customclass");
            $("li[aria-selected='false']").removeClass("customclass");
        },0)
    },
    "select2:unselect" : function(e) {
        $("li[aria-selected='false']").removeClass("customclass");
    }
});

$(function () {
    $('.genealogy-tree ul').hide();
    $('.genealogy-tree>ul').show();
    $('.genealogy-tree ul.active').show();
    $('.genealogy-tree li').on('click', function (e) {
        var children = $(this).find('> ul');
        if (children.is(":visible")) children.hide('fast').removeClass('active');
        else children.show('fast').addClass('active');
        e.stopPropagation();
    });
});

*/
