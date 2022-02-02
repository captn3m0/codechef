---
{"category_name":"easy","problem_code":"SNCOUP","problem_name":"Snakes and their coup against The mongoose","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"31-05-2017","tags":{"0":"admin2","1":"easy","2":"greedy","3":"snckpb17"},"editorial_url":"https://discuss.codechef.com/problems/SNCOUP","time":{"view_start_date":1496331000,"submit_start_date":1496331000,"visible_start_date":1496331000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNCOUP.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/russian/SNCOUP.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNCOUP.pdf">Vietnamese</a> as well.</h3>

<p>Snakeland is a well organised city. The houses of the city are organised in an orderly rectangular fashion with dimensions <b>2 * n</b>, i.e. there are total two rows and <b>n</b> columns. The house in the i-th row and j-th column is also said to be the house at coordinates (i, j). Some of the houses are occupied by snakes, while the others are empty. You are given this information through an array <b>s</b> of dimension <b>2 * n</b>, where, if <b>s</b>[i][j] = '*', it denotes that there is a snake in the house at coordinates (i, j), and if <b>s</b>[i][j] = '.', it denotes that the house is empty. </p>

<p>These snakes are planning a coup against a mongoose who controls their city from outside. So, they are trying their best to meet with other snakes and spread information about the date of the coup. For spreading this information, they can just hiss from their house and usually their hiss is so loud that it will be heard in all the cells except if there is a soundproof fence built that cuts the voice. Note that the external borders of Snakeland are already built of soundproof material. The mongoose got to know about the plan, and he wants to construct sound proof fences along the borders of the houses so that no two people should be able to communicate with each other. The fence can be either vertical or horizontal.  Each fence can be of any length, but the mongoose wants to minimize the number of fences to be built. Find out the minimum number of fences that the mongoose should build.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting number of test cases. The descriptions of the <b>T</b> test cases follow.</p>
<p>The first line of each test case contains a single integer, <b>n</b>.</p>
<p>Each of the next two lines contains <b>n</b> characters denoting the first and the second rows of Snakeland respectively.</p>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the minimum number of fences that the mongoose needs to build.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
<tt>
3
2
**
**
3
***
*..
3
*..
.*.
</tt>

<b>Output</b>
2
3
1
</pre>

<h3>Explanation</h3>
<img src="https://discuss.codechef.com/upfiles/fences.png"/>

<p>All the examples are shown in the pictures. The fences built are shown by red colored horizontal or vertical segments. You can see that after putting these borders no snake can talk with any another snake.</p>