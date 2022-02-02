---
{"category_name":"medium","problem_code":"PRMQ","problem_name":"Chef and Prime Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vipsharmavip","problem_tester":null,"date_added":"27-03-2017","tags":{"0":"vipsharmavip"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/mandarin/PRMQ.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/PRMQ.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/PRMQ.pdf">Vietnamese</a> as well.</h3>

<p>Chef likes solving problems involving a lot of queries with prime numbers. One day, he found a new problem which is difficult for him to solve. So, he needs your help to solve it.</p>
<p>Given an array <b>a</b> of <b>N</b> integers and <b>Q</b> queries where each query provides you with four integers <b>L, R, X</b> and <b>Y</b>. </p>
<p> For each query, output the value of <b>F(L, R, X, Y)</b> as defined below. </p>

<pre><code>
F(L, R, X, Y) {

     result := 0
     for( i = X to i = Y )  {
         if( isPrime(i) ) {
             for( j = L to j = R ) {
                  number := a[j]
                  exponent := 0
                  while( number % i == 0 ) {
                     exponent := exponent + 1 
                     number := number/i
                  }
                  result := result + exponent
              }
         }
     }
     return result
}

</code></pre>
<p>
<b>isPrime(x)</b> returns true if <b>x</b> is Prime otherwise false.
</p>
</p>

<h3>Input</h3>
<ul>
<li>First line of the input contains a single integer <b>N</b> denoting the number of elements in a given array.</li>
<li>Next line contains <b>N</b> integers separated by a space, which denotes <b>a[1], a[2], ..., a[n]</b>. </li>
<li>Third line contains <b>Q</b> denoting the number of queries.</li>
<li>Next <b>Q</b> lines contain four integers <b>L , R , X , Y </b>  separated by a space.</li>
</ul>

<h3>Output</h3>
<p> Output the value for each <b>F(L, R, X, Y)</b> in a separate line.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N, Q</b>  ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b> </li>
<li>1 ≤ <b>X</b> ≤ <b>Y</b> ≤ 10<sup>6</sup> </li>
<li>2 ≤ <b>a[i]</b> ≤ 10<sup>6</sup> , where 1 ≤ i ≤ <b>N</b> </li>
</ul>


<h3>Subtasks  </h3>
<ul>
<li>Subtask #1 (10 points): 1 ≤ <b>N, Q</b> ≤ 100 </li>
<li>Subtask #2 (20 points): 1 ≤ <b>N, Q</b> ≤ 1000 </li>
<li>Subtask #3 (70 points): Original constraints </li> 
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 
2 3 4 5
2
1 3 2 3
1 4 2 5

<b>Output:</b>
4
5
</pre>

<h3>Explanation</h3>
<p><b>Query 1</b> :</p>
<p>The first prime is 2. 2 divides the first element 1 time, 2 divides the second element 0 times and 2 divides the third element 2 times. Hence 2 contributes a total of 3 to the result ( 1 + 0  + 2 = 3 ) </p>

<p>The second prime is 3. 3 divides the first element 0 times, 3 divides the second element 1 time and 3 divides the third element 0 times. Hence it contributes 1 to the result ( 0 + 1 + 0 = 1 )  </p>

<p>The final answer is the sum of the contributions, which is 4  (3 + 1 = 4)
</p>
<p><b>Query 2</b> : </p>
<p>The first prime we consider is 2. 2 divides the first element in our range 1 time, 2 divides the second element 0 times, 2 divides the third element 2 times and 2 divides the fourth element 0 times. Thus 2 contributes a total of 3 to the result ( 1 + 0  + 2 + 0 = 3 ) </p>
<p>The second prime in our [<b>X, Y</b>] range is 3. 3 divides the first element 0 times, 3 divides the second element 1 time, 3 divides the third element 0 times and 3 divides the fourth element 0 times. Thus 3 contributes a total of 1 ( 0 + 1 + 0 + 0 = 1 )  </p>
<p>The third prime is 5.  5 divides the first element 0 times , 5 divides the second element 0 times, 5 divides the third element 0 times and 5 divides the fourth element 1 time. So 5 contributes 1 ( 0 + 0 + 0 + 1 = 1 ) </p>  
<p>The final answer is the sum of all the contributions, which is 5 ( 3 + 1 + 1 = 5)</p>

<p> Note : Use fast I/O due to large input files </p>