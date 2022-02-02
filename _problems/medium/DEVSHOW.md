---
{"category_name":"medium","problem_code":"DEVSHOW","problem_name":"Devu and survival task of a reality show","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"19-02-2015","tags":{"0":"admin2","1":"snck151c"},"editorial_url":"http://discuss.codechef.com/problems/DEVSHOW","time":{"view_start_date":1433700900,"submit_start_date":1433700900,"visible_start_date":1433700900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/mandarin/DEVSHOW.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/russian/DEVSHOW.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151C/vietnamese/DEVSHOW.pdf">Vietnamese</a></h3>


<p>
Devu and his friend Amit got selected in a random television reality show. One of the task in the show was really interesting. The task was called "the survival" task. In the task, each person has to vote two person's names. One should not vote a single person twice. Also he/ she should not vote himself/ herself. After the voting, all the person having votes equal to highest and lowest votes are kicked out of the show. Naturally highest voted persons should go out of the show, but to maintain interestingness of the show, they also kick out lowest voted persons too.   
</p>

<p>
Devu and Amit naturally don't want themselves to get kicked out of the show. Fortunately, voting of all other persons than Devu and Amit has already happened, so now Devu and Amit know choices of votes of all other persons. Assume that there are total <b>n</b> persons. You are guaranteed that <b>n</b> is greater than or equal to <b>3</b>. Devu has index <b>n - 1</b> and Amit has index <b>n</b>. The votes of all other persons that Devu and Amit are given to you by two arrays <b>firstVote</b> and <b>secondVote</b> each of size <b>n - 2</b>. Now Devu and Amit both want to design a strategy of voting after having discussion with each other. They want that as few of them (i.e. from Devu and Amit) gets out of the show. You have to tell in the best scenario, will both, one or none of them will remain in the show? Print a single line containing "both", "one" or "none" according to the situation. You also have to tell details of whom Devu and Amit will vote? If there are more than possible ways they can vote, print any of them.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>First line of the test case will contain a single integer <b>n</b> denoting total number of persons in the show.</li>
<li>Second line contains <b>n - 2</b> space separated integers denoting the array <b>firstVote</b>, denoting the first votes of all other persons than Devu and Amit.</li>
<li>Third line contains <b>n - 2</b> space separated integers denoting the array <b>secondVote</b> denoting the second votes of all other persons than Devu and Amit.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, print three lines. </li>
<li>First line should contain "both", "one" or "none" (without quotes) depending on how many out of Devu and Amit still remain in the show </li>
<li>Second line should contain two space separated integers corresponding to the votes of Devu.</li> 
<li>Third line should contain two space separated integers corresponding to the votes of Amit.</li> 
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>3 ≤ n ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ firstVote[i], secondVote[i] ≤ n</b></li>
<li>For each <b>i (1 ≤ i ≤ n-2)</b>, <b>firstVote[i] != secondVote[i]</b></li>
<li>For each <b>i (1 ≤ i ≤ n-2)</b>, <b>firstVote[i] != i</b></li>
<li>For each <b>i (1 ≤ i ≤ n-2)</b>, <b>secondVote[i] != i</b></li>
<li>Sum of <b>n</b> over all the test cases will be less than or equal to <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3
2
3
5
2 1 1
4 5 2

<b>Output:</b>
none
3 1
2 1
both
3 5
2 4

</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There is exactly one way of voting for Devu and Amit. So after the voting, all the persons will have equal votes. So they all will be kicked out of the show. So as Devu and Amit both are kicked out, print "none" in first line. In second line, print votes of Devu(index 2) and in third line print votes of Amit.</p>
<p><b>Example case 2.</b> Devu and Amit can plan to save both of them. Devu will vote to 3rd person and Amit. Amit will vote 2nd person and Devu. In this way, 1st person will have highest 3 votes and 2nd person will have 2 votes, where as the 3rd person will have 0 votes. Devu and Amit both will have 2-2 votes each. So 1st and 3rd both persons will get kicked out of the show. Both Devu and Amit will survive :)</p