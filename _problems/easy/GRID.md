---
{"category_name":"easy","problem_code":"GRID","problem_name":"Sherlock and the Grid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"5-06-2014","tags":{"0":"cook50","1":"darkshadows","2":"dynamic","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/GRID","time":{"view_start_date":1411324200,"submit_start_date":1411324200,"visible_start_date":1411324200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/GRID.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/GRID.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/GRID.pdf">Russian</a> as well.</h3>
<p>Sherlock is stuck. There is a <b>N X N</b> grid in which some cells are empty (denoted by ‘<b>.</b>’), while some cells have rocks in them (denoted by ‘<b>#</b>’). Sherlock is on the South of the grid. He has to watch what is happening on the East of the grid. He can place a mirror at <b>45</b> degrees on an empty cell in the grid, so that he'll see what is happening on East side by reflection from the mirror.<br/><br/><br />
But, if there's a rock in his line of sight, he won't be able to see what's happening on East side. For example, following image shows all possible cells in which he can place the mirror.
</br/></br/></p>
<p><img src="//www.codechef.com/download/COOK50/grid.jpg" /></p>
<p>You have to tell Sherlock in how many possible cells he can place the mirror and see what's happening on East side.</p>
<h3>Input</h3>
<p>First line, <b>T</b>, the number of testcases. Each testcase will consist of <b>N</b> in one line. Next <b>N</b> lines each contain <b>N</b> characters.</p>
<h3>Output</h3>
<p>For each testcase, print the number of possible options where mirror can be placed to see on the East side.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
#..
#..
#..
3
#.#
#.#
#.#

<b>Output:</b>
6
0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> All places where rock are not there are valid positions.<br/><br />
<b>Example case 2.</b> No valid positions.</br/></p>
<p><br/><br />
<b>Note:</b> Large input data. Use fast input/output.<br/><br />
Time limit for PYTH and PYTH 3.1.2 has been set 8s.</br/></br/></p>
