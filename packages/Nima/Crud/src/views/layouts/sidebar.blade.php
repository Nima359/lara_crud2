<div class = " clear" id = "sidebar">
  <style>
    h4, h3 {
      padding: 3px 0;
    }
    
    div#sidebar {
      border-top-right-radius: 12px;
      border-top-left-radius: 12px;
    }
    
    #sidebar ul#sidebarLastPosts, div#sidebarLastBooks ul#sidebarBooks {
      background-color: #f1f4f7;
      
      border: 1px solid gray;
      overflow: hidden;
      /*border-bottom: 0 ;*/
    }
    
    div#sidebar > div > div > h4 {
      background-color: #5d03ff;
      color: green;
      border-top-left-radius: 11px;
      border-top-right-radius: 11px;
      padding: 13px 0;
    }
    
    #sidebar ul#sidebarLastPosts li, div#sidebarLastBooks ul#sidebarBooks li {
      border: 1px solid gray;
      border-bottom: none;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
      border-left: 0;
      border-right: 0;
    }
    
    #sidebar ul#sidebarLastPosts li:last-child, div#sidebarLastBooks ul#sidebarBooks li:last-child {
      /*border-bottom: 1px solid gray;*/
      overflow: hidden;
    }
    
    
    #sidebar ul#sidebarLastPosts li a, div#sidebarLastBooks ul#sidebarBooks li a {
      /*border: 1px solid gray;*/
      display: inline-block;
      width: 100%;
      text-indent: 22px;
      /*padding: 11px 0 5px 0;*/
      padding: 14px 10px;
      font-weight: bold;
      /*font-size: 12vh;*/
      font-size: 13pt;
      /*font-size: 1.1em;*/
      /*font-size: 2ex;*/
      /*font-size: 5.1mm;*/
      /*font-size: 1.2pc;*/
      /*font-size: 0.2in;*/
      /*font-size: 20q;*/
      /*font-size: 2vw ;*/
      /*font-size: 2vmax;*/
      /*font-size: 12.6vmin;*/
    }
    
    #sidebar ul#sidebarLastPosts li img, div#sidebarLastBooks ul#sidebarBooks li img {
      width: 14px;
      height: 14px;
      float: right;
      /*margin: 2px 14px 0 0;*/
    }
    
    div#sidebar ul#sidebarLastPosts li:hover a, div#sidebarLastBooks ul#sidebarBooks li:hover a {
      background-color: #5d03ff;
      color: white;
    }
    
    div#sidebarLastBooks {
      text-align: center;
      margin-top: 8px;
    }
    
    div#sidebarLastBooks > h4 {
      text-align: center;
      background-color: #5d03ff;
      color: #c818F5 !important;
      border-top-left-radius: 11px;
      border-top-right-radius: 11px;
      padding: 13px 0;
    }
    
    
    div#sidebarLastBooks ul li:last-child, div#sidebarLastBooks ul li:last-child a {
      overflow: hidden;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    
    
    div#sidebarLastBooks ul#sidebarBooks li:last-child > a {
      /*border-bottom: 1px solid gray;*/
      overflow: hidden;
    }
  
  
  </style>
  
  <div class = "clear">
    <div>
      <h4>Left Sidebar</h4>
    </div>
    <div style = "text-align: center;">
      <ul id = "sidebarLastPosts" style = "text-align: center;">
      
      </ul>
    </div>
    
    <div id = "sidebarLastBooks">
      <h4>کتابهای جدید</h4>
      <ul id = "sidebarBooks">
      
      </ul>
    </div>
    <div class = "clear"></div>
  </div>
</div>