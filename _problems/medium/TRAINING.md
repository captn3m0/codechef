---
{"category_name":"medium","problem_code":"TRAINING","problem_name":"Selection for Training Camps","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":"maksflow","date_added":"25-03-2012","tags":{"0":"cook21","1":"flying_ant","2":"medium"},"editorial_url":"http://discuss.codechef.com/problems/TRAINING","time":{"view_start_date":1335119015,"submit_start_date":1335119015,"visible_start_date":1335119400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">Cricket is almost like a religion in India and many young kids attend coaching camps every year. This year there are total N kids at the camp and the coach is forming teams so that kids within a team can practice and compete with each other. As we know that kids are afraid of tall and heavy persons, they are afraid to get in to a team having such player. More formally, kid A is afraid of another kid B if weight(A) ≤ weight(B) and height(A) ≤ height(B). You can assume that no two kids have both height and weight equal to each other. Here is how the teams are formed by the coach.<br />
</p><p align="justify">All the N students are lined up. For R = 1,2,3,... in order, in the Rth round the coach calls all the students who are not afraid of any one in the line. They all come forward, form a team number R and leave for practice. This process is repeated as long as there are kids still in the line, yet to form a team. Given the height and weight of each of the N students, find the number of teams formed and the number of kids in each of them.

<h3>Input</h3>
</p><p align="justify">First line contains T, number of test cases ( 1 ≤ T ≤ 3 ). T cases follow. Each case starts with an integer N ( number of students, 1 ≤ N ≤ 100,000 ), each of the following N lines contains integers Hi Wi ( height and weight of the ith kid, 1 ≤ Hi, Wi ≤ 10<sup>9</sup>. No two kids have their corresponding Hi and Wi equal to each other ).

<h3>Output</h3>
</p><p align="justify">For each case, output K, the total number of teams formed, in the first line. In the second line, output K integers S1 S2 ... Sk , where Si is the number of kids in the ith team, separated by space.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
3 4
5 5
4 3
6
7 7
4 7
5 5
1 2
3 4
2 1

<b>Output:</b>
2
1 2
4
1 2 1 2 
</pre>

<br />
<b>Explanation:</b><br /><br />
Case 1 : There are 3 kids initially in the line, (3,4) (5,5) (4,3)<br />
In the first round, only (5,5) comes forward and he leaves. (3,4) and (4,3) are both afraid of (5,5).<br />
In the second round, both (3,4) and (4,3) come forward, as they are not afraid of each other.<br /><br />
Case 2 : <br />
Round 1 : Only (7,7) comes forward, as all others are afraid of him<br />
Round 2 : (4,7) and (5,5) form a team<br />
Round 3 : (3,4) comes forward, as (1,2) and (2,1) are afraid of him<br />
Round 4 : (1,2) and (2,1) are not afraid of each other and so forms the last team.</p>