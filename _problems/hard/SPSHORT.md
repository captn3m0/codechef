---
{"category_name":"hard","problem_code":"SPSHORT","problem_name":"Special Shortest Walk","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"anudeep2011","date_added":"11-11-2014","tags":{"0":"cook55","1":"devuy11","2":"dijkstra","3":"graph","4":"medium","5":"paths","6":"shortest"},"editorial_url":"http://discuss.codechef.com/problems/SPSHORT","time":{"view_start_date":1424025000,"submit_start_date":1424025000,"visible_start_date":1424025000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/mandarin/SPSHORT.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/russian/SPSHORT.pdf">Russian</a> as well.</h3>
<p>You are given an <b>undirected graph</b>, you need to find the shortest walk in the graph from <b>source</b> to <b>sink</b> which satisfies the following property:  </p>
<p>Let the shortest walk from source to sink be through edges E<sub>1</sub> -> E<sub>2</sub> -> ... -> E<sub>k</sub>, then Weight(E<sub>1</sub>) > Weight(E<sub>2</sub>) &lt; Weight(E<sub>3</sub>)  > Weight(E<sub>4</sub>) .....and so on.  </p>
<p>Formally, the difference between adjacent edge weights in shortest walk should keep on switching from positive to negative and from negative to positive. And the first difference should be positive.</p>
<h3>Input Format</h3>
<p>First Line contains <b>T</b>, the number of Test cases.<br /><br />
First line of each test case contains <b>N</b> the number of nodes and <b>M</b> the number of edges.  <br /><br />
Next <b>M</b> lines follows, each line contains 3 integers <b>X</b>, <b>Y</b> and <b>Z</b>, which denotes that there is an edge from <b>X</b> to <b>Y</b> with weight <b>Z</b>.  <br /><br />
Next line contains 2 integer <b>source</b> and <b>sink</b>.  <br /></p>
<h3>Output Format</h3>
<p>For each test case, print the shortest walk satisfying the property. If no such walk exists then print "No Solution".  <br /></p>
<pre>
<h3>Constraints</h3>
1 ≤ Sum of <b>N</b> over all test cases ≤ 100000 
1 ≤ Sum of <b>M</b> over all test cases ≤ 500000 
3 ≤ <b>N</b> ≤ 100000   
2 ≤ <b>M</b> ≤ 500000   
1 ≤ <b>T</b> ≤ 2000 
1 ≤ <b>Z</b> ≤ 100000000  
1 ≤ <b>X,Y</b> ≤ <b>N</b>  
<b> X != Y </b>
<b>source !=  sink</b> and there are no multi edges.
<b>source and sink</b> will not be connected by a direct edge

<h3>Sample Input</h3>
3
5 6
4 2 8
1 4 6
2 3 10
3 1 10
1 2 3
3 5 3
4 3
4 3
1 4 4
2 4 5
2 3 6
4 3
5 5
1 2 100
2 3 80
3 4 90
4 2 85
2 5 120
1 5
    
<h3>Sample Output</h3>
19
No Solution
475

<h3>Explanation</h3>
For First Test Case: Shortest Valid Walk: 4->1->2->3  
For Second Test Case: There is no valid Walk satisfying the constraints.
</pre><p><br /><br /></p>
<p><b>Warning: Large Input files, some files are upto 10 MB</b> </p>
