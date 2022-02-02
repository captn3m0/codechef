---
{"category_name":"school","problem_code":"LAPIN","problem_name":"Lapindromes","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/wf0Uz8n2_4w","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"D","29":"CAML","30":"FORT","31":"ASM","32":"swift","33":"FS","34":"WSPC","35":"LISP clisp","36":"SCM guile","37":"PERL6","38":"ERL","39":"CLPS","40":"ICK","41":"NICE","42":"PRLG","43":"ICON","44":"COB","45":"SCM chicken","46":"PIKE","47":"SCM qobi","48":"ST","49":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_adm","problem_tester":"tuananh93","date_added":"1-05-2013","tags":{"0":"ad","1":"cakewalk","2":"june13","3":"vamsi_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/LAPIN","time":{"view_start_date":1371461400,"submit_start_date":1371461400,"visible_start_date":1371461400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LAPIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<p><i>Lapindrome</i> is defined as a string which when split in the middle, gives two halves having the same characters and same frequency of each character. If there are odd number of characters in the string, we ignore the middle character and check for lapindrome. For example <b><i>gaga</i></b> is a lapindrome, since the two halves <b><i>ga</i></b> and <b><i>ga</i></b> have the same characters with same frequency. Also, <b><i>abccab</i></b>, <b><i>rotor</i></b> and <b><i>xyzxy</i></b> are a few examples of lapindromes. Note that <b><i>abbaab</i></b> is NOT a lapindrome. The two halves contain the same characters but their frequencies do not match. <br/> Your task is simple. Given a string, you need to tell if it is a lapindrome.</p>

<h3>Input:</h3>
First line of input contains a single integer <b>T</b>, the number of test cases.<br/>
Each test is a single line containing a string <b>S</b> composed of only lowercase English alphabet.<br/>

<h3>Output:</h3>
For each test case, output on a separate line: "YES" if the string is a lapindrome and "NO" if it is not.<br/>

<h3>Constraints:</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>2 ≤ |<b>S</b>| ≤ 1000, where |<b>S</b>| denotes the length of <b>S</b></li>
</ul>

<h3>Example:</h3>

<b>Input:</b>
<pre>
6
gaga
abcde
rotor
xyzxy
abbaab
ababc


</pre>
<b>Output:</b>
<pre>
YES
NO
YES
YES
NO
NO

</pre>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>