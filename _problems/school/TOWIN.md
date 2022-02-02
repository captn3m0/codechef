---
{"category_name":"school","problem_code":"TOWIN","problem_name":"Winning Strategy","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dj_r_1","problem_tester":"","date_added":"13-07-2020","tags":{"0":"cakewalk","1":"dem2020","2":"dementia","3":"dj_r_1","4":"greedy"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TOWIN","time":{"view_start_date":1597339800,"submit_start_date":1597339800,"visible_start_date":1597339800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TOWIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<H3> Problem Statement</H3>
You are given an array of $n$ integers and there are $2$ people: $P1$ and $P2$. <br><br>

Each person picks up <b>any</b> one element and adds its value to their score. <b>Initially the score of both $P1$ and $P2$ is $0$ </b>. However the person who plays second can take two elements in his/her first try and then both will take one element in alternate turns. <br><br>

Example: if $P1$ goes first, then the pickup sequence can look like: 
<center>
$P1 → P2 → P2 → P1 → P2 → P1 → P2 .... $
</center>
<br>
Each person wants to maximize his/her score and both of them play optimally.
<br><br>
$P1$ wants to win and is asking for your help. Tell whether $P1$ should play "first" or "second". If both of them will get the same score independent of who plays first, then output “draw”.
<br><br>
Note: Each element can be taken only once (i.e. once it is taken by some person, it cannot be taken again). 

<H3>Input</H3>
First line contains an integer <b>$t$</b>. The number of test cases.<br>
First line of each test case contains an integer <b>$n$</b>. The number of elements in the array.<br>
Second line of each test case contains $n$ space separated integers $a$<sub>$1$</sub>, $a$<sub>$2$</sub>, $a$<sub>$3$</sub> ... $a$<sub>$n$</sub>.

<H3>Output</H3>
For each test case, print one line containing one of the following word <b>without quotes</b>:<br>
<ul>
<li><b>“first”</b> if $P1$ should play first.<br>
<li><b>“second”</b> if $P1$ should play second.<br>
<li><b>“draw”</b> if both of them will get the same score independent of who plays first.<br>
<li><b>Note: the output is case sensitive, so “FIRST” will be considered as wrong output.</b>
</ul>

<H3>Constraints: </H3>
<ul>
<li> $1 \le t \le 15$ <br>
<li> $1 \le n \le 10^4$ <br>
<li> $1 \le$ $a$<sub>$i$</sub> $\le 10^9$, where $1 \le i \le n$
</ul>

<H3>Sample Input</H3>
2<br>
3<br>
1 1 1<br>
4<br>
1 1 1 1<br>

<H3>Sample Output</H3>
second<br>
draw<br>

<H3>Explanation</H3>
There are two test cases:
<br><br>
In the first test case, the person who plays first will get the total sum = 1 since the person who plays second will take both the remaining 1s. Hence $P1$ should play second.
<br><br>
In the second test case, both will get the sum = 2 so it doesn't matter who plays first. It will always result in draw.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>