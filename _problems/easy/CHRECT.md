---
{"category_name":"easy","problem_code":"CHRECT","problem_name":"Chef and Walking on the rectangle ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"gamabunta","date_added":"11-05-2013","tags":{"0":"ad","1":"cakewalk","2":"furko","3":"july13"},"editorial_url":"http://discuss.codechef.com/problems/CHRECT","time":{"view_start_date":1373880600,"submit_start_date":1373880600,"visible_start_date":1373880600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Chef likes rectangles. Among all possible rectangles, he loves rectangles that can be drawn like a grid, such that they have <strong>N</strong> rows and <strong>M</strong> columns. Grids are common in Byteland. Hence, Chef has drawn such a rectangle and plans on moving around in it.</p>
<p style="text-align:justify">The rows of the rectangle are labeled from <b>1</b> to <b>N</b> from top to bottom. The columns of the rectangle are labeled form <b>1</b> to <b>M</b> from left to right. Thus, the cell in the <b>top left</b> can be denoted by <b>(1,1)</b>. The <b>5<sup>th</sup></b> cell from the left in the <b>4<sup>th</sup></b> row form the top can be denoted by <b>(4,5)</b>. The <b>bottom right</b> cell can be denoted as <b>(N,M)</b>.</p>
<p style="text-align:justify">Chef wants to move from the cell in the <b>top left</b> to the cell in the <b>bottom right</b>. In each move, Chef may only move one cell right, or one cell down. Also, Chef is not allowed to move to any cell outside the boundary of the rectangle.</p>
<p style="text-align:justify">Of course, there are many ways for Chef to move from <b>(1,1)</b> to <b>(N,M)</b>. Chef has a curious sport. While going from <b>(1,1)</b> to <b>(N,M)</b>, he drops a stone on each of the cells he steps on, except the cells <b>(1,1)</b> and<br />
<b>(N,M)</b>. Also, Chef repeats this game exactly <strong>K</strong> times.</p>
<p style="text-align:justify">Let us say he moved from <b>(1,1)</b> to <b>(N,M)</b>, exactly <b>K</b> times. At the end of all the <b>K</b> journeys, let the number of stones, in the cell with the maximum number of stones, be equal to <b>S</b>. Chef wants to know what is the smallest possible value for <b>S</b>.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line contains single integer <b>T</b>, the number of test cases. Each of the next <b>T</b> lines contains <b>3</b> integers <b>N, M and K</b>, respectivily.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output the smallest value possible for <b>S</b>, if the Chef chooses the <b>K</b> paths smartly.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 100</b><br />
<b>1 ≤ N, M, K ≤ 70</b>
</p>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
2 2 1
3 3 2
1 5 12

<b>Output</b>
1
1
12

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> Chef may choose any way. The maximum value on any cell would be 1.</p>
<p style="text-align:justify"><b>Test Case 2:</b> If Chef selects two paths that have a common cell, such as</p>
<p style="text-align:justify">
<ul>
<li><b>(1,1)->(1,2)->(2,2)->(3,2)->(3,3)</b></li>
<li><b>(1,1)->(2,1)->(2,2)->(3,2)->(3,3)</b></li>
</ul>
</p>
<p style="text-align:justify">Then the value of <b>S</b> will be equal to <b>2</b>, since the number of stones in <b>(2,2)</b> and <b>(3,2)</b> is equal to 2. But, if Chef selects two paths which do not have any common cells, such as</p>
<p style="text-align:justify">
<ul>
<li><b>(1,1)->(1,2)->(1,3)->(2,3)->(3,3)</b></li>
<li><b>(1,1)->(2,1)->(3,1)->(3,2)->(3,3)</b></li>
</ul>
</p>
<p style="text-align:justify">Then the value of <b>S</b> will be equal to <b>1</b>.</p>
