---
{"category_name":"medium","problem_code":"LVGFT","problem_name":"Lovers Gift","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ziein","problem_tester":null,"date_added":"27-10-2017","tags":{"0":"dsu","1":"medium","2":"nov17","3":"ziein"},"editorial_url":"https://discuss.codechef.com/problems/LVGFT","time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/LVGFT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/LVGFT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/LVGFT.pdf">Vietnamese</a> as well.</h3>

<p> Chef buys lots of gifts for his love Chefua. Chef keeps all his money in the bank, and so if he wants to buy a gift, he must go to one of the branches of the bank in the country to get money, and then buy the gift.</p>

<p>The country where Chef lives consists of <b>N</b> cities which are connected by <b>N - 1</b> bidirectional roads in such way that there is a unique path from any city to any other city. The cities numbered from <b>1</b> to <b>N</b>. It so happens that the city numbers directly determine the quality of a gift bought in that city. That is, the city numbered <b>N</b> would have the best gift, and so on.</p>

<p>Initially, there are no branches of the bank in any city. Then one by one, the bank decides to open branches in some cities. If the Chef lives in city <b>C</b> and he wants to buy a gift, he would ideally want to buy from the city with the best gifts, which is City <b>N</b>. But remember that he has to take money from the bank. And Chef being lazy, does not want to travel extra just to go to the bank. He wants to go to the bank while going to the city from where he will buy the gift. In other words, he can buy from a City j, only if there is at least one bank branch in any of the cities on the unique path from City C to City j (both end points included).</p>

<p>But he has realized that all people from his city go to the highest numbered city, and it gets very crowded. Hence, being smart, he has decided that among all the cities that he could buy gifts from (as described earlier), he will go to the city which has the second highest number. Note that he can buy the gift from the city where the bank branch exists.</p>

<p>Chef also shifts his city frequently. These details and details of when and where the bank opens its branches are given to you. Each time Chef moves to a new city, you have to report which city he will buy the gift from.</p>

<h3>Input</h3>
<ul>
<li>First line contains number <b>T</b> which is the number of test cases. The description of each testcase follows.</li>
<li>The first line of each testcase contains two space-separated numbers <b>N</b> and <b>M</b>, which denote  the number of cities in Chef's country and the number of events (queries) which will happen, respectively.</li>

<li>The next <b>N - 1</b> lines will contain two space-separated numbers <b>U</b>, <b>V</b> which means that there is a bidirectional road between cities <b>U</b> and <b>V</b>.</li>

<li>The next <b>M</b> lines will contain two space-separated numbers <b>type</b>, <b>C</b>, which denote the queries as described below:
.
<ul>
<li>If <b>type = 1</b>, this means that the bank is opening a branch in city <b>C</b>.</li>
<li>If <b>type = 2</b>, this means that Chef now lives in city <b>C</b>.</li>
</ul>

</li>
</ul>

<h3>Output</h3>
<p>In each testcase, for every query of the form (<b>type = 2</b>, <b>C</b>) you should print which city Chef will buy the gift from now.</p>
<p>That is, Chef now lives in City <b>C</b>, and you know where all the bank branches are as of now. If the number of cities that he can buy the gift from (obeying the condition that he should pass by a bank branch) is less than 2, then you should print <b>-1</b>. Else, you should print the city which has the second highest number among them.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N, M</b> ≤ 100000</li>
<li>1 ≤ <b>U, V</b> ≤ <b>N</b></li>
<li>1 ≤ <b>type</b> ≤ 2</li>
<li>1 ≤ <b>C</b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<ul>

<li>Subtask #1 (20 points):
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N, M</b> ≤ 1000</li>
</ul>
</li>

<li>Subtask #2 (80 points): Original constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 6
1 2
2 3
2 4
1 5
1 4
1 4
2 5
1 2
2 3
2 1

<b>Output:</b>
-1
4
3
</pre>

<h3>Explanation</h3>
<p>The map of the country is as follows:</p>

<p></p>
<center><img src="http://tinyurl.com/y9vtq58r" height="200"/></center>
<p></p>

<p>The first query says that the bank opened a branch in city 4. The second query also does the same, and it doesn't make anything different for us. So now, the maps looks as follows, where the circled city means that it has a bank branch:



<p></p>
<center><img src="http://tinyurl.com/yar2vjnn" height="200"/></center>
<p></p>

<p>The third query says that Chef now lives in city 5, and we need to print which city he would buy his gift from. He can only buy from city 4, because that is the only city which has a bank on the path from City 5 to it. And because he can go to less than 2 Cities, the answer for this query is -1.</p>

<p>The fourth query says that the bank is opening a branch in City 2. So now, the map looks as follows:</p> 

<p></p>
<center><img src="http://tinyurl.com/y8c7fsp8" height="200"/></center>
<p></p>

<p>The fifth query says that Chef now lives in City 3. From here, he can buy gifts from any of these cities: {1, 2, 4, 5}. And the city with the second highest number among these is 4, and hence that is our second output.</p>

<p>The last query says that Chef now lives in City 1. From here, he can buy gifts from any of these cities: {2, 3, 4}. And the city with the second highest number among these is 3, and hence that is our last output.</p>