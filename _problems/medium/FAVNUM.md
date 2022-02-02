---
{"category_name":"medium","problem_code":"FAVNUM","problem_name":"Favourite Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"laycurse","date_added":"20-12-2011","tags":{"0":"aho","1":"dynamic","2":"july12","3":"medium","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/FAVNUM","time":{"view_start_date":1342000252,"submit_start_date":1342000252,"visible_start_date":1342000252,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef likes numbers and number theory, we all know that. There are <b>N</b> digit strings that he particularly likes. He likes them so much that he defines some numbers to be <b>beautiful numbers</b> based on these digit strings. 
<p>
Beautiful numbers are those numbers whose decimal representation contains <b>at least one</b> of chef's favorite digit strings as a substring.
Your task is to calculate the <b>K<sup>th</sup></b> smallest number amongst the beautiful numbers in the range from <b>L</b> to <b>R</b> (both inclusive). 
If the number of beautiful numbers between <b>L</b> and <b>R</b> is less than <b>K</b>, then output "<b>no such number</b>".

<h3>Input</h3>
<p>In the first line of input there will be integers <b>L</b>, <b>R</b>, <b>K</b> and <b>N</b>.
Then <b>N</b> lines follow. Each line will contain a single string of decimal digits.

<h3>Output</h3>
<p>Output one integer - the solution to the problem described above or a string "<b>no such number</b>" if there is no such number.


<h3>Constraints</h3>
<p><ul><li>1<=<b>L</b><=<b>R</b><=10^18</li>
<li>1<=<b>K</b><=<b>R-L+1</b></li>
<li>1<=<b>N</b><=62<br></li>
<li>1<=<b>The length of any Chef's favourite digit string</b><=18. Each string begins with a nonzero digit.</li>
</ul>
<br>
<h3>Example</h3>

<pre>
<b>Input:</b>
1 1000000000 4 2
62
63

<b>Output:</b>
163
</pre>
<br>
<pre>
<b>Input:</b>
1 1 1 1
2

<b>Output:</b>
no such number
</pre>
<br>
<pre>
<b>Input:</b>
1 1000 15 2
6
22

<b>Output:</b>
67
</pre>