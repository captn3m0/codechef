---
{"category_name":"school","problem_code":"CCBTS01","problem_name":"PCM Dilemma","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/duf6kZNNpcc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":20,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"13-01-2018","tags":{"0":"admin3"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CCBTS01","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCBTS01","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<p>After mastering the art of Coding , Chef has decided to master Physics(P) , Chemistry(C) and Maths(M). Luckily he has three sisters where each sister is known to be master of exactly one subject. <br />Now you are given a string of size 3 where character at index 1 denotes the subject known to sister I, character at index 2 denotes the subject known to sister II and character at index 3 denotes the subject known to sister III. You have to answer with either "YES" if chef can master "PCM" from his sisters or "NO" if he cannot.</p>
<p><strong>Note</strong><br /> String will only contain characters from the set { P , C , M }.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows.</li>
<li>First and only line of each testcase contains the string mentioned.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output a single line containing either "YES" or "NO". </p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> ≤ <strong>T</strong> ≤ <strong>50</strong></li>
<li><strong>Length of string </strong> = <strong>3</strong></li>
</ul>
<h3>Example</h3>
<pre><strong>Input:</strong>
3<br />PCM<br />CCP<br />CPM<br /><br /><strong>Output:</strong>
YES<br />NO<br />YES</pre>
<h3>Explanation </h3>
<p>For testcase 1 sister  I knows Physics(P) , sister II knows Chemistry(C) and sister III knows Maths(M) hence chef can master PCM.</p>
<p>Whereas in testcase II none of the sister knows Maths(M) hence answer is NO </p>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>