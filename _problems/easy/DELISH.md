---
{"category_name":"easy","problem_code":"DELISH","problem_name":"Dessert Wizard","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"viv001","problem_tester":"tuananh93","date_added":"30-03-2013","tags":{"0":"dynamic","1":"june13","2":"simple","3":"viv001"},"editorial_url":"http://discuss.codechef.com/problems/DELISH","time":{"view_start_date":1371462223,"submit_start_date":1371462223,"visible_start_date":1371460885,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>It's finally summer in Chefland! So our chef is looking forward to prepare some of the best "beat-the-heat" dishes to attract more customers. He summons the Wizard of Dessert to help him with one such dish.</p>
<p> The wizard provides the chef with a sequence of <b>N</b> ingredients where the <b>i<sup>th</sup></b> ingredient has a delish value of <b>D[i]</b>. The preparation of the dish takes place in two phases. <br/><br/></br/></br/></p>
<p><b>Phase 1 :</b> The chef chooses two indices <b>i</b> and <b>j</b> and adds the ingredients <b>i, i+1, ..., j</b> to his dish. He also finds the sum of the delish value in this range i.e <b>D[i] + D[i+1] + ... + D[j]</b>.  <br/><br/> </br/></br/></p>
<p><b>Phase 2 :</b> The chef chooses two more indices <b>k</b> and <b>l</b> and adds the ingredients <b>k, k+1, ..., l</b> to his dish. He also finds the sum of the delish value in this range i.e <b>D[k] + D[k+1] + ... + D[l]</b>. <br/> <br/><br />
Note that <b>1</b>  ≤ <b>i</b>  ≤ <b>j</b> &lt; <b>k</b>  ≤ <b>l</b> ≤ <b>N</b>. <br/><br/></br/></br/></br/></br/></p>
<p>The total delish value of the dish is determined by the absolute difference between the values obtained in the two phases. Obviously, the chef wants to maximize the total delish value for his dish. So, he hires you to help him.
 </p>
<h3>Input</h3>
<p>First line of input contains an integer <b>T</b> denoting the number of test cases. For each test case, the first line contains an integer <b>N</b> denoting the number of ingredients. The next line contains <b>N</b> space separated integers where the <b>i<sup>th</sup></b> integer represents the delish value <b>D[i]</b> of the <b>i<sup>th</sup></b> ingredient.</p>
<h3>Output</h3>
<p>Print the maximum delish value of the dish that the chef can get.</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>50</b> </li>
<li> <b>2</b> ≤ <b>N</b> ≤ <b>10000</b> </li>
<li> <b>-1000000000 (−10<sup>9</sup>)</b> ≤ <b>D[i]</b> ≤ <b>1000000000 (10<sup>9</sup>)</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
1 2 3 4 5
4
1 1 -1 -1

<b>Output:</b>
13
4
</pre><h3>Explanation</h3>

<p><b>Example case 1.</b><br/><br />
Chef can choose <b>i = j = 1, k = 2, l = 5</b>.<br/><br />
The delish value hence obtained  is <b> | (2+3+4+5) − (1) | = 13 </b>.
 </br/></br/></p>
<p><b>Example case 2.</b><br/><br />
 Chef can choose <b>i = 1, j = 2, k = 3, l = 4</b>.<br/><br />
The delish value hence obtained  is <b> | ( ( −1 ) + ( −1 ) ) − ( 1 + 1 ) | = 4 </b>.</br/></br/></p>
