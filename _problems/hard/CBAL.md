---
{"category_name":"hard","problem_code":"CBAL","problem_name":"Chef and Balanced Strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"kevinsogo","date_added":"3-03-2015","tags":{"0":"ma5termind","1":"may15","2":"medium","3":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/CBAL","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/mandarin/CBAL.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/russian/CBAL.pdf">Russian</a>.</h3>
<p>Chef Smurf likes strings a lot but he likes balanced strings more. Smurf calls a string <b>S</b> a balanced string if and only if characters of strings <b>S</b> can be partitioned into two multi-sets <b>M<sub>1</sub></b> and <b>M<sub>2</sub></b> such that <b>M<sub>1</sub> = M<sub>2</sub></b>.<br/><b>For eg :</b> Strings such as <b>aabbcc</b>, <b>abcabc</b> , <b>baccba</b> , <b>abccba</b> are all balanced strings as their characters can be partitioned into two multi-sets <b>M<sub>1</sub></b> and <b>M<sub>2</sub></b> such that <b>M<sub>1</sub> = M<sub>2</sub> = {a,b,c} </b> whereas strings such as <b>aba</b>, <b>abc</b> , <b>abcdef</b>, <b>blablah</b> are not balanced strings.</br/></p>
<p>Today, Smurf found a special string <b>P</b> consisting of <b>N</b> lower case Latin letters. Smurf wants to make some queries about his string <b>P</b>.</p>
<p>Each of Smurf's query consists of <b>3</b> integers <b>L R type</b>. For a given query, Smurf wants to calculate this :    </p>
<p>                                        <IMG WIDTH = "200" SRC = "https://s3.amazonaws.com/codechef_shared/download/CBAL/4.png" /></p>
<p>For all <b>T<sub>s,e</sub></b>, where <b>T<sub>s,e</sub></b> is balanced string such that starting index <b>s</b> and ending index <b>e</b> of a chosen string <b>T<sub>s,e</sub></b> satisfies <b>L ≤ s &lt; e ≤ R.</b></p>
<p><b>Note : </b><b>|T<sub>s,e</sub>|</b> denotes the length of string <b>T<sub>s,e</sub></b>.</p>
<p>Just to make this problem little bit more interesting, given input is encoded. Instead of <b>L</b> and <b>R</b> in each query, you will be provided with two integers <b>X</b> and <b>Y</b>. Two keys <b>A</b> and <b>B</b> are used to decode the given input.</p>
<pre>
<code>
void decode(){
    A = 0 ; // initialising first key 
    B = 0 ; // initialising second key 
    Q = input(); // number_of_queries;
    while( Q -- ) {
        X = input(); 
        Y = input();
        type = input() ;
        L = ( X + A ) % N + 1; // decoding L
        R = ( Y + B ) % N + 1; // decoding R
        // N is the length of the given string
        if (L > R) {
            // swap L and R
            int T = L;
            L = R;
            R = T;
        }  
        ans = solve(L,R,type); // calculate answer for current query
        A = B;     // updating key A 
        B = ans;   // updating key B 
    } 
}
</code>
</pre><p><br/></br/></p>
<p>Smurf cannot accomplish this task alone. Can you help him ?</p>
<h3>Input</h3>
<p>First line of the input contains a single integer <b>T</b> denoting the number of test cases. First line of each test case contains a string <b>P</b> denoting the chef's special string. Next line of the each test case contains a single integer <b>Q</b> denoting the number of chef's queries. Next <b>Q</b> lines of the each test case contains three space separated integers denoting <b>X</b>, <b>Y</b> and <b>type</b> respectively.</p>
<h3>Output</h3>
<p>For each of the chef's query, print the required answer.</p>
<h3>Note </h3>
<p>Two substrings <b>T<sub>s<sub>1</sub>,e<sub>1</sub></sub></b> and <b>T<sub>s<sub>2</sub>,e<sub>2</sub></sub></b> are considered to be different if either <b>s<sub>1</sub> != s<sub>2</sub></b> or <b>e<sub>1</sub> != e<sub>2</sub></b> where <b>s<sub>1</sub>,e<sub>1</sub></b> and <b>s<sub>2</sub>,e<sub>2</sub></b> are the starting and ending indices of string <b>T<sub>1</sub></b> and string <b>T<sub>2</sub></b> respectively.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup>.</b></li>
<li><b>1 ≤ |P| ≤ 10<sup>5</sup>.</b></li>
<li><b>1 ≤ Q ≤ 10<sup>5</sup>.</b></li>
<li><b>0 ≤ X,Y &lt; |P|.</b></li>
<li><b>type = { 0 , 1 , 2 }.</b></li>
<li><b>sum of N over all test cases i.e SN does not exceed 10<sup>5</sup>.</b></li>
<li><b>sum of Q over all test cases i.e SQ does not exceed 10<sup>5</sup>.</b></li>
<li><b>All test files are strictly according to constraints.</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li> Subtask #1: <b>1 ≤ SN,SQ ≤ 500 , type = { 0, 1, 2 }. : ( 20 pts ) </b></li>
<li> Subtask #2: <b>1 ≤ SN,SQ ≤ 10<sup>4</sup> , type = { 0, 1, 2 }. : ( 20 pts ) </b></li>
<li> Subtask #3: <b>1 ≤ SN,SQ ≤ 10<sup>5</sup> , type = { 0 }.          : ( 20 pts ) </b></li>
<li> Subtask #4: <b>1 ≤ SN,SQ ≤ 10<sup>5</sup> , type = { 0, 1 }.     : ( 20 pts ) </b></li>
<li> Subtask #5: <b>1 ≤ SN,SQ ≤ 10<sup>5</sup> , type = { 0, 1, 2 }. : ( 20 pts ) </b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
1
cchheeff
5
0 1 0
0 2 1
7 5 2
0 7 0
1 1 2
<b>Output</b>
1
8
80
10
4
</pre><h3>Explanation</h3>
<pre>
<b>After decoding queries will take the following form : </b>
1
cchheeff
5
1 2 0
1 4 1
1 6 2
1 8 0
2 4 2
<p>Q1 : "cc" is the only balanced string. Type = 0 and therefore answer = 1.<br/>Q2 : "cc" , "hh" , "cchh" are the only balanced strings. Type = 1 and therefore answer = 2 + 2 + 4 = 8.<br/>Q3 : "cc" , "hh" , "ee" , "cchh" , "hhee" , "cchhee" are the only balanced strings. Type = 2 and therefore answer = 2<sup>2</sup> + 2<sup>2</sup> + 2<sup>2</sup> + 4<sup>2</sup> + 4<sup>2</sup> + 6<sup>2</sup>= 80.</br/></br/></p>
<h3>Warning</h3>
<p>Large test data set, Prefer to use faster input/output methods .</p></pre>