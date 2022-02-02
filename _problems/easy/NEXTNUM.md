---
{"category_name":"easy","problem_code":"NEXTNUM","problem_name":"Rank of the Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vineet_adm","problem_tester":"rubanenko","date_added":"1-11-2013","tags":{"0":"brute","1":"cakewalk","2":"cook40","3":"enumeration","4":"factorial","5":"vineet_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/NEXTNUM","time":{"view_start_date":1384713000,"submit_start_date":1384713000,"visible_start_date":1384713000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NEXTNUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3> Read problems statements in Russian <a target="_blank" href="https://www.codechef.com/download/translated/COOK40/russian/NEXTNUM.pdf">here</a></h3>
<p> The Head Chef has received his id from the Association of Byteland . He wants to know the numerical rank of his number among the numbers that can be formed by the exact same digits ( i.e. among numbers having same number of 0's , 1's ... 9's as his id ) .  Note that id's can start with 0 . Given a number, find the rank of the number .


<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li> Each test case contains a single integer <b>N</b> denoting the id the chef has received .
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the answer to the given test case . </li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>number of digits in N</b> ≤ <b>18</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
276
762

<b>Output:</b>
2
6
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b>The numbers that can be formed with one '2' ; one '7' and one '6' in increasing order are : <br>
267 <br>
276 <br>
627 <br>
672 <br>
726 <br>
762 <br>
The <b> rank </b> for 276 is 2 and <b>rank</b> for 762 is 6.</p>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>