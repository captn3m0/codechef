---
{"category_name":"school","problem_code":"NITIKA","problem_name":"Whats in the Name","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"iamabjain","problem_tester":null,"date_added":"29-06-2017","tags":{"0":"iamabjain","1":"implementation","2":"july17"},"editorial_url":"https://discuss.codechef.com/problems/NITIKA","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/NITIKA.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/NITIKA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/NITIKA.pdf">Vietnamese</a> as well.</h3>


<p>Nitika was once reading a history book and wanted to analyze it. So she asked her brother to create a list of names of the various famous personalities in the book. Her brother gave Nitika the list. Nitika was furious when she saw the list. The names of the people were not properly formatted. She doesn't like this and would like to properly format it.</p> 

<p>A name can have at most three parts: first name, middle name and last name. It will have at least one part. The last name is always present. The rules of formatting a name are very simple:
<ul>
  <li><b>Only</b> the first letter of each part of the name should be capital.</li>
  <li>All the parts of the name except the last part should be represented by only two characters. The first character should be the first letter of the part and should be capitalized. The second character should be ".".</li>
</ul>
</p>  

<p>Let us look at some examples of formatting according to these rules:</p>
<ul>
<li>gandhi -> Gandhi
<li>mahatma gandhI -> M. Gandhi </li>
<li>Mohndas KaramChand ganDhi -> M. K. Gandhi </li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The only line of each test case contains the space separated parts of the name.</p>

<h3>Output</h3>
<p>For each case, output the properly formatted name.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</b></li>
<li>2 ≤ Length of each part of the name ≤ 10</li>
<li>Each part of the name contains the letters from lower and upper case English alphabets (i.e. from 'a' to 'z', or 'A' to 'Z')</li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (40 points)</b>
<ul>
<li>There is exactly one part in the name.</li>
</ul>
</p>

<p><b>Subtask #2 (60 points)</b>
<ul>
<li>Original constraints.</li>
</ul>
</p>


<h3>Example</h3>
<pre>
<b>Input:</b>
3
gandhi
mahatma gandhI
Mohndas KaramChand gandhi

<b>Output:</b>
Gandhi 
M. Gandhi 
M. K. Gandhi 
</pre>

<h3>Explanation</h3>
<p>The examples are already explained in the problem statement.</p>