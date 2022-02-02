---
{"category_name":"school","problem_code":"BIT2A","problem_name":"A - Books","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/okE4RdA_8uA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"shwetaiiitu","problem_tester":"","date_added":"1-08-2019","tags":{"0":"bit22019","1":"shwetaiiitu"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BIT2A","time":{"view_start_date":1569002400,"submit_start_date":1569002400,"visible_start_date":1569002400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BIT2A","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<p>You are given a $sorted$ list $A$ of size  $N$.You have to make a new list $B$ such that $B[i]$ is equal to the number of elements $strictly$  $greater$ than $A[i]$ in the list $A$.</p>
<p>Print the $new$ $list$.</p>


<h3>Input</h3>

<p>The first line consists of  $T$, denoting the number of test cases.</p>
<p>First line of each test case consists of one integer denoting $N$, where $N$ is the size of the list given to you.</p>

<p>Second line of each test case contains the list given to you   containing $N$ elements.</p>

<h3>Output</h3>

<p>For each test case print the list in a single line and the elements of the list should be separated by  $space$.</p>

<p>Print the answer to $each$ test case in a $new$ $line$.</p>

<h3>Constraints</h3>

<ul>
 <li>   $1 \le T \le 100$ , where $T$ is the number of test cases. </li>
<li> $1 \le N \le 100$, where $N$ is the number of elements in the list.</li>
<li>$1 \le A[i] \le 1000000$ ,where $A[i]$ is the  $ith$ element in  the list given to you.</li>
</ul>

<h3>Subtasks</h3>

<ul>
<li>$15$ $points$: All the elements in the list given to you are distinct.</li>
<li>$35$ $points$: Original constraints: Elements can be repeated in the list.</li>
</ul>

<h3>Sample Input</h3>
<p>
2<br>
4<br>
1 2 4 4<br>
5<br>
1 2 2 2 2
</p>
<h3>Sample Output</h3>
<p>
3 2 0 0<br>
4 0 0 0 0
</p>


<h3>Explanation</h3>
<p> The explanation for test case 1 of sample input :</p>
<p>The first element in the new list is 3 since the first element in the previous list was 1, and there are three elements which are strictly greater than 1, that is 2, 4 and 4.</p>

<p>The second element in the new list is 2 since the second element in the previous list was 2, and there are two elements which are strictly greater than 2, that is 4 and 4.</p>

<p>The third and fourth element in the new list is 0  since third and fourth element in the previous list was  4 and there are no elements which are strictly greater than them.</p>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>