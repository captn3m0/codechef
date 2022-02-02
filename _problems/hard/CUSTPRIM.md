---
{"category_name":"hard","problem_code":"CUSTPRIM","problem_name":"Payton numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"pushkarmishra","date_added":"5-12-2014","tags":{"0":"advanced","1":"feb15","2":"hard","3":"kevinsogo"},"editorial_url":"http://discuss.codechef.com/problems/CUSTPRIM","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Payton likes numbers, but all the numbers he has ever known are the ordinary integers, and he doesn't like it. Thus he created his own set of “numbers”, which he called <b>Payton numbers</b>.</p>
<p>Each Payton number is a triplet of ordinary integers <b>(a,b,c)</b>, with the restriction that <b>c</b> is either <b>11</b> or <b>24</b> (because Payton likes <b>11</b> and <b>24</b>). And then, Payton defines the <b>product</b> of two Payton numbers <b>(a<sub>1</sub>,b<sub>1</sub>,c<sub>1</sub>)</b> and <b>(a<sub>2</sub>,b<sub>2</sub>,c<sub>2</sub>)</b> as the following: </p>
<p><pre><code>def multiply((a<sub>1</sub>,b<sub>1</sub>,c<sub>1</sub>), (a<sub>2</sub>,b<sub>2</sub>,c<sub>2</sub>)):

    s = (a<sub>1</sub>a<sub>2</sub> + b<sub>1</sub>b<sub>2</sub> + c<sub>1</sub>c<sub>2</sub>) + (a<sub>1</sub>b<sub>2</sub> + b<sub>1</sub>a<sub>2</sub>) + (c<sub>1</sub> + c<sub>2</sub>)
    t = floor[s/2] + 16(c<sub>1</sub> + c<sub>2</sub>) - c<sub>1</sub>c<sub>2</sub>
    A = (t - 2(a<sub>1</sub>b<sub>2</sub> + b<sub>1</sub>a<sub>2</sub>) - (a<sub>1</sub>c<sub>2</sub> + c<sub>1</sub>a<sub>2</sub>) + 33(a<sub>1</sub> + a<sub>2</sub>)
           + (b<sub>1</sub>b<sub>2</sub> - a<sub>1</sub>a<sub>2</sub>))
    B = (t - 5(a<sub>1</sub>b<sub>2</sub> + b<sub>1</sub>a<sub>2</sub>) - (c<sub>1</sub>b<sub>2</sub> + b<sub>1</sub>c<sub>2</sub>) + 33(b<sub>1</sub> + b<sub>2</sub>)
           + (2b<sub>1</sub>b<sub>2</sub> + 4a<sub>1</sub>a<sub>2</sub>))

    if s is even:
        return (A-540,B-540,24)
    else:
        return (A-533,B-533,11)
</code></pre></p>
<p>Eventually, Payton found out that he can define many interesting things about his numbers:</p>
<p>A <b>zero</b> is a Payton number <b>z</b> whose product with any other Payton number is <b>z</b>. Payton proved that there is a unique zero in Payton numbers, namely <b>(11,11,11)</b>.</p>
<p>A <b>unity</b> is a Payton number whose product with any other Payton number is that Payton number. Payton proved that there is a unique unity in Payton numbers, namely <b>(4,4,24)</b>.</p>
<p>A Payton number <b>x</b> <b>divides</b> another Payton number <b>y</b> if there exists a Payton number <b>z</b> such that <b>x·z = y</b>.</p>
<p>A Payton number is a <b>unit</b> if it divides a unity. Payton proved that any unity is also a unit, therefore <b>(4,4,24)</b> is a unit. But it's possible that there are other units.</p>
<p>A Payton number is <b>prime</b> if it isn't a zero, isn't a unit, and can't be written as the product of two nonzero, non-unit Payton numbers.</p>
<p>Given a Payton number, Payton wants to determine whether it is prime or not. Please help him, so that he can start replacing all numbers in math with Payton numbers!</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of one line which contains three integers, <b>a</b>, <b>b</b> and <b>c</b>, representing the Payton number <b>(a,b,c)</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a word: “PRIME” if the Payton number is a prime, and “NOT PRIME” otherwise.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>c</b> is either <b>11</b> or <b>24</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li> Subtask #1: (30 points) <b>-10<sup>4</sup></b> ≤ <b>a</b>, <b>b</b> ≤  <b>10<sup>4</sup></b></li>
<li> Subtask #2: (70 points) <b>-10<sup>7</sup></b> ≤ <b>a</b>, <b>b</b> ≤  <b>10<sup>7</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<code>4
11 11 11
4 4 24
-104 126 11
4 5 24</code>

<b>Output:</b>
<code>NOT PRIME
NOT PRIME
NOT PRIME
PRIME
</code>
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The number <b>(11,11,11)</b> is a zero, so it's not prime.</p>
<p><b>Example case 2.</b> The number <b>(4,4,24)</b> is a unit, so it's not prime.</p>
<p><b>Example case 3.</b> The number <b>(-104,126,11)</b> is not a prime, since it is the product of two nonzero non-units <b>(13,26,24)</b> and <b>(4,-8,11)</b>.</p>
<p><b>Example case 4.</b> It can be shown that the number <b>(4,5,24)</b> isn't a zero, isn't a unit, and cannot be factored into two nonzero non-units. Therefore it is prime.</p>

