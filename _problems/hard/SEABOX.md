---
{"category_name":"hard","problem_code":"SEABOX","problem_name":"Sereja and BOX","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"7-10-2016","tags":{"0":"ad","1":"dynamic","2":"jan17","3":"knapsack","4":"medium","5":"sereja"},"editorial_url":"https://discuss.codechef.com/problems/SEABOX","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/SEABOX.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/SEABOX.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/SEABOX.pdf">Vietnamese</a> as well.</h3>

<p>Sereja has a box <b>A</b> with size <b>N*N*N</b>, where <b>N=2<sup>Q</sup></b> for some integer <b>Q</b>. Each cell <b>A(i, j, k)</b> contains some binary value (zero or one). Sereja now has C++ function <b>F(A)</b> (where the box <b>A</b> is parameter of the function <b>F</b>):
</p>

<p>
<pre>
<code>
int F(box A, int dx = 0, int dy = 0, int dz = 0, int size = N) {
   vector<bool> B = {};
   for (int i = dx; i < dx + size; i++) {
      for (int j = dy; j < dy + size; j++) {
         for (int k = dz; k < dz + size; k++) {
           B.push_back(A[i][j][k]);
         }
      }
   }
   sort(B.begin(), B.end());
   if (B[0] == B[size * size * size - 1]) {
      return 1;
   }
   int result = 0;
   for (int i = 0; i < 2; i++) {
      for (int j = 0; j < 2; j++) {
        for (int k = 0; k < 2; k++) {
           result += f(A, 
                          dx + i * size / 2, 
                          dy + j * size / 2, 
                          dz + k * size / 2,
                          size / 2);
        }
      }
   }
   return result;
}
</code>
</pre>
</p>

<p>
This function computes compression level of the box. Sereja now wants to know minimal and maximal value of <b>F(D)</b> among all boxes <b>D</b> which has same dimensions as <b>A</b> and differ in no more than <b>K</b> cells with <b>A</b>.  
</p>


<h3>Input</h3>
<p>First line contains integers <b>N</b> and <b>K</b>.</p>
<p>Each of <b>N</b> next blocks contains <b>N</b> lines, each line contains <b>N</b> numbers, <b>k-th</b> number in <b>j-th</b> line of <b>i-th</b> block means value of <b>A(i,j,k)</b>.</p>

<h3>Output</h3>
<p>Output two numbers in a single line - minimal and maximal value of <b>F(D)</b>.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>32</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N<sup>3</sup></b></li>
</ul>
</p>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1:</b> <b>1</b> ≤ <b>N</b> ≤ <b>2</b> (5 points)</li>
<li><b>Subtask #2:</b> <b>1</b> ≤ <b>N</b> ≤ <b>4</b> (15 points)</li>
<li><b>Subtask #3:</b> <b>1</b> ≤ <b>N</b> ≤ <b>8</b> (20 points)</li>
<li><b>Subtask #4:</b> <b>1</b> ≤ <b>N</b> ≤ <b>16</b> (25 points)</li>
<li><b>Subtask #5:</b> original constraints (35 points)</li>
</ul>

<h3>Example 1</h3>
<pre><b>Input:</b>
2 0
0 0
0 0
0 0
0 0

<b>Output:</b>
1 1
</pre>

<h3>Example 2</h3>
<pre><b>Input:</b>
2 1
0 0
0 0
0 0
0 0

<b>Output:</b>
1 8
</pre>