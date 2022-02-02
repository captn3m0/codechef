---
{"category_name":"hard","problem_code":"TKCONVEX","problem_name":"Two k-Convex Polygons","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":"tuananh93","date_added":"16-04-2013","tags":{"0":"june13","1":"math","2":"medium","3":"shangjingbo"},"editorial_url":"http://discuss.codechef.com/problems/TKCONVEX","time":{"view_start_date":1371462407,"submit_start_date":1371462407,"visible_start_date":1371460885,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Given <b>n</b> sticks' lengths, determine whether there is a solution to choose <b>2k</b> out of them and use these <b>2k</b> sticks to form two <b>k</b>-convex polygons (non-degenerated), namely, two convex polygons each has exactly <b>k</b> sticks as its sides, and every adjacent sticks are not parallel.
</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>n</b> and <b>k</b>, denoting the number of sticks and the size of convex polygon we needed.</p>
<p>The second line contains <b>n</b> positive integers, denoting the lengths of sticks.</p>
<h3>Output</h3>
<p>Print "Yes" (without quotes) in the first line if exists a solution. Otherwise print "No" (without quotes) instead.</p>
<p>If such solution exists, you should output a plan in the second line. Print <b>2k</b> indexes (indexes start from <b>1</b>) of the sticks you chosen. First <b>k</b> sticks compose the first <b>k</b>-convex polygon. And the later <b>k</b> sticks form the second. If there are more than one solution, output any.</p>
<h3>Constraints</h3>
<ul>
<li><b>2k</b> ≤ <b>n</b> ≤ <b>1000</b></li>
<li><b>3</b> ≤ <b>k</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>length of each stick</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
6 3
1 1 1 2 2 2

<b>Output 1:</b>
Yes
1 2 3 4 5 6


<b>Input 2:</b>
6 3
1 2 3 100 200 300

<b>Output 2:</b>
No
</pre><h3>Explanation</h3>
<p><b>Example case 1:</b> 1 1 1 and 2 2 2 form two triangles.</p>
<p><b>Example case 2:</b> Please be careful that convex polygons must be non-degenerated.</p>
