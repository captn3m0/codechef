---
{"category_name":"medium","problem_code":"PUPPYPLM","problem_name":"Puppy and Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"kostya_by","date_added":"23-06-2015","tags":{"0":"constructive","1":"cook67","2":"hashing","3":"palindromes","4":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/PUPPYPLM","time":{"view_start_date":1456081200,"submit_start_date":1456081200,"visible_start_date":1456081200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/mandarin/PUPPYPLM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/russian/PUPPYPLM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/vietnamese/PUPPYPLM.pdf">Vietnamese</a> as well.</h3>


<p>A recent survey suggested that almost everybody knows that a palindrome is a string which reads the same backwards as forwards. More recently, puppy Tuzik invented a brand-new concept: <b>K-palindromes</b>. A string is called a <b>K-palindrome</b> if it is possible to make it a usual palindrome by replacing at most <b>K</b> characters. For example, a string <tt>abb</tt> can be made a palindrome by replacing one character, the second <tt>b</tt> with an <tt>a</tt>. Please note, that according to the definition, a usual palindrome is a <b>K-palindrome</b> for any non-negative integer <b>K</b>.</p>

<p>Today, Tuzik was walking in a garden and came across a string <b>S</b> of <b>N</b> characters. Now, he wants to know the sum of the lengths of all substrings of <b>S</b> which are <b>K-palindromes</b>. Note that two substrings are considered to be different if they cover the different ranges of indices, even if they are equal as strings.</p>

<h3>Input</h3>

<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. Each of the next <b>T</b> lines contains a description of a separate test case.</p> 
<p>The only line of the test case description contains two integers <b>N</b> and <b>K</b> followed by string <b>S</b>, all separated by single spaces. <b>S</b> consists of lowercase Latin characters only.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing one integer: the answer for the test case.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>5</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
7 0 abacaba
7 1 abacaba

<b>Output:</b>
28
56
</pre>

<h3>Explanation</h3>
<p><b>Test case 1:</b><br> There are: 
<ul>
<li><b>7</b> 0-palindromes with length <b>1</b> (just each character)</li> 
<li><b>3</b> 0-palindromes with length <b>3</b> (<b>aba, aca, aba</b>)</li> 
<li><b>1</b> 0-palindrome with length <b>5</b> (<b>bacab</b>)</li> 
<li><b>1</b> 0-palindrome with length <b>7</b> (<b>abacaba</b>)</li>. 
</ul>
The total length: <b>7*1 + 3*3 + 1*5 + 7*1 = 28</b></p>

<p><b>Test case 2:</b><br> There are: 
<ul>
<li><b>7</b> 1-palindromes with length <b>1</b> (just each character)</li> 
<li><b>6</b> 1-palindromes with length <b>2</b> (each substring with length <b>2</b>)</li> 
<li><b>5</b> 1-palindromes with length <b>3</b> (each substring with length <b>3</b>)</li> 
<li><b>3</b> 1-palindromes with length <b>5</b> (<b>abaca</b>,<b>bacab</b>, <b>acaba</b>)</li> 
<li><b>1</b> 1-palindrome with length <b>7</b> (<b>abacaba</b>)</li>. 
</ul>
The total length: <b>7*1 + 6*2 + 5*3 + 5*3 + 7*1 = 56</b></p>