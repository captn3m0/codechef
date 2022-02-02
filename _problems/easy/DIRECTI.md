---
{"category_name":"easy","problem_code":"DIRECTI","problem_name":"Reversing directions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anton_lunyov","date_added":"26-11-2012","tags":{"0":"ad","1":"cakewalk","2":"cook29","3":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/DIRECTI","time":{"view_start_date":1356288330,"submit_start_date":1356288330,"visible_start_date":1356288262,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef recently printed directions from his home to a hot new restaurant across the town, but forgot to print the directions to get back home. Help Chef to transform the directions to get home from the restaurant.</p>
<p>A set of directions consists of several instructions. The first instruction is of the form "Begin on XXX", indicating the street that the route begins on. Each subsequent instruction is of the form "Left on XXX" or "Right on XXX", indicating a turn onto the specified road.</p>
<p>When reversing directions, all left turns become right turns and vice versa, and the order of roads and turns is reversed. See the sample input for examples.</p>
<h3>Input</h3>
<p>Input will begin with an integer <b>T</b>, the number of test cases that follow. Each test case begins with an integer <b>N</b>, the number of instructions in the route. <b>N</b> lines follow, each with exactly one instruction in the format described above.</p>
<h3>Output</h3>
<p>For each test case, print the directions of the reversed route, one instruction per line. Print a blank line after each test case.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 15</li>
<li>2 ≤ <b>N</b> ≤ 40</li>
<li>Each line in the input will contain at most 50 characters, will contain only alphanumeric characters and spaces and will not contain consecutive spaces nor trailing spaces. By alphanumeric characters we mean digits and letters of the English alphabet (lowercase and uppercase).</li>
</ul>
<h3>Sample Input</h3>
<pre>2
4
Begin on Road A
Right on Road B
Right on Road C
Left on Road D
6
Begin on Old Madras Road
Left on Domlur Flyover
Left on 100 Feet Road
Right on Sarjapur Road
Right on Hosur Road
Right on Ganapathi Temple Road
</pre><h3>Sample Output</h3>
<pre>Begin on Road D
Right on Road C
Left on Road B
Left on Road A

Begin on Ganapathi Temple Road
Left on Hosur Road
Left on Sarjapur Road
Left on 100 Feet Road
Right on Domlur Flyover
Right on Old Madras Road

</pre><h3>Explanation</h3>
<p>In the first test case, the destination lies on Road D, hence the reversed route begins on Road D. The final turn in the original route is turning left from Road C onto Road D. The reverse of this, turning right from Road D onto Road C, is the first turn in the reversed route.</p>
