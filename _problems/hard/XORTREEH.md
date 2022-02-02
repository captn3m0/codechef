---
{"category_name":"hard","problem_code":"XORTREEH","problem_name":"Chef and Horcrux","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"adkroxx","problem_tester":"alex_2oo8","date_added":"23-08-2017","tags":{"0":"adkroxx","1":"fast","2":"fastmodexp","3":"fft","4":"hard","5":"ntt","6":"oct17"},"editorial_url":"https://discuss.codechef.com/problems/XORTREEH","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/mandarin/XORTREEH.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/russian/XORTREEH.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/vietnamese/XORTREEH.pdf">vietnamese</a> as well.</h3>

<p>Once again Harry is out there with his friends Ron and Hermione looking out for Horcruxes. They found out that one of the Horcrux is located at The Lestrange Vault. But You-Know-Who has locked the vault with a dark spell.</p>

<p>Fortunately, the password to the vault can be found out by solving a problem. But they were not able to solve the problem and hence need help from Chef. Since Chef is quite busy, he has delegated this task to you.</p>

<p>You are given an array of <b>N</b> elements. <a href="https://en.wikipedia.org/wiki/Mex_(mathematics)"><b>MEX</b></a> of a set is defined as the minimum non-negative integer that doesn't exist in it. For example, the MEX of the set {0, 2, 4} is 1 and the MEX of the set {1, 2, 3} is 0. Note that the MEX of empty set will be 0.</p>

<p>Similar to <a href="https://en.wikipedia.org/wiki/Expected_value">Expected value</a>, let's define <em>Cheftated value</em>, <b>C[Y]</b> of a random variable <b>Y</b> as follows:
<center><img src ="https://discuss.codechef.com/upfiles/XORTREEH_img1.jpeg" height=48 width=184></img></center>
where <b>Y</b> is a random variable with a finite number of outcomes <b>y<sub>1</sub>, y<sub>2</sub>, ..... , y<sub>a</sub></b> occurring with probabilities <b>p<sub>1</sub>, p<sub>2</sub>, ..... , p<sub>a</sub></b>. Take <b>0<sup>0</sup> = 1</b>.
</p>

<p>You are given an array <b>A</b> consisting of <b>N</b> non-negative integers. Your task is to calculate the cheftated value of base <b>K</b> xor sum of MEX values of <b>X</b> randomly selected subsequences( <b>repetitions allowed</b>) of A.</p>

<p>Cheftated value can always be represented as an irreducible fraction <b>P/Q</b> such that <b>gcd(Q, 330301441) = 1</b>, i.e. <b>Q<sup>-1</sup></b> (<a href="https://en.wikipedia.org/wiki/Modular_multiplicative_inverse"> multiplicative inverse</a>) modulo <b>330301441</b> exists. You have to print the value <b>P * Q<sup>-1</sup></b> modulo <b>330301441</b>. Please see the sample explanation for more details.</p>

<p>Also, xor-sum in base <b>K</b> (xor<sub>k</sub>) can be perfomed by representing the numbers in base <b>K</b> and <a href="https://en.wikipedia.org/wiki/Addition#Addition_in_other_bases">adding each digit in base K</a>( <b>without carrying forward</b>), e.g. xorsum of 6 and 9 in base 5 is equal to <b>11<sub>5</sub> xor<sub>5</sub> 14<sub>5</sub> = 20<sub>5</sub></b>, i.e. the number <b>10</b>.
</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting number of test cases. </p>
<p>First line of each test case contains three space separated integers <b>N</b>, <b>K</b> and <b>X</b>.</p>
<p>Second line of each test case contains <b>N</b> space separated integers, <b>i</b>-th of which is <b>A<sub>i</sub></b> denoting the i<sup>th</sup> element of the array.
</p>

<h3>Output</h3>
<p>
For each test case, output a line containing single integer representing the value of <b>P*Q<sup>-1</sup></b> modulo <b>330301441</b>.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>2</b> ≤ <b>K</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>X</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (15 points) : <b>K</b> ≤ 3</li>
<li><b>Subtask #2</b> (15 points) : <b>N</b> ≤ 10<sup>3</sup></li>
<li><b>Subtask #3</b> (70 points) : Original constraints</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2 2
1 0 2
4 4 4
4 0 1 1

<b>Output:</b>
87392358
88861416
</pre>

<h3>Explanation</h3>
<p>
<b>Example case 1:</b> 
Let's name the sub-sequences  as A = [], B = [1], C = [0], D = [2], E = [1, 0], F = [1, 2], G = [0, 2], H = [1, 0, 2].</p>
<p>Possible outcome of xor values after selecting two sub-sequences (repetitions allowed):</p>
<ul>
<li>0 when you select (two from (A, B, D, F)) or (two from (C, G)) or (two from (E)) or (two from (H)) making it 22 ways.</li>
<li>1 when you select (one from (A, B, D, F) and one from (C, G)) or (one from (E) and one from (H)) making it 18 ways.</li>
<li>2 when you select (one from (A, B, D, F) and one from (E)) or (one from (H) and one from (C, G)) making it 12 ways.</li>
<li>3 when you select (one from (A, B, D, F) and one from (H)) or (one from (E) and one from (C, G)) making it 12 ways.</li>
</ul>

<p>Cheftated value = 0<sup>2*0</sup> * (22/64)<sup>3*0</sup> + 1<sup>2*1</sup> * (18/64)<sup>3*1</sup> + 2<sup>2*2</sup> * (12/64)<sup>3*2</sup> + 3<sup>2*3</sup> * (12/64)<sup>3*3</sup> = 70310425195/68719476736.</p>
<p>Answer to print = 70310425195 * 68719476736<sup>-1</sup> mod 330301441 = <b>87392358</b>
</p>