---
{"category_name":"easy","problem_code":"CHBLLS","problem_name":"Chef and Balls","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"kevinsogo","date_added":"12-02-2016","tags":{"0":"antoniuk1","1":"logic","2":"may16","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHBLLS","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/CHBLLS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/CHBLLS.pdf">Russian</a> as well.</h3>


<p>Chef has bought ten balls of five colours. There are two balls of each colour. Balls of same colour have same weight. Let us enumerate colours by numbers from 1 to 5. Chef knows that all balls, except two (of same colour), weigh exactly one kilogram. He also knows that each of these two balls is exactly 1 kg heavier than other balls.
</p>

<p>You need to find the colour which balls are heavier than others. </p>

<p>To do that, you can use mechanical scales with two weighing pans. As your scales are very accurate, you can know the exact difference of weights of objects from first and second pans. Formally, the scales will give you the difference (signed difference) of weights of the objects put into the first pan and the second pan. See the following examples for details.
<ul>
<li>If you put two balls of the same colour on your scales, each ball to one pan, the scales will tell you that difference is "0".</li>
<li>But if you put into the first pan some balls of total weight 3 kg, and into the second pan of 5 kg, then scales will tell you "-2" because the second pan is 2 kg heavier than first. </li>
<li>Similarly, if you put 5 kg weight in first pan and 3 kg in the second pan, then scale will tell you "2" as first pan is 2 kg heavier than second.</li>
</ul>
</p>

<h3>Input & Output</h3>
<ul>
<li>The interaction process have two phases. At first phase you perform sequence of weighings on the mechanical scales. At the second phase you should output the colour of the heavier balls.</li>
<li>To use the mechanical scales, you should print "1"(without quotes) and then print two lines, the first line will describe the enumeration of colours of balls on the first pan and second line should that of second pan.</li>
<li>To describe some pan, you need to print one integer <b>n</b> - the number of balls you put in this pan, followed by <b>n</b> space-separated integers - colours of the balls you put in this pan. </li>
<li>Once you have printed required data, you can read from the standard input one integer - the difference of weights of the first and the second pans.</li>
<li>To output the colour of the heavier balls, you should print "2"(without quotes) and one integer in next line - colour of the heavier balls. </li>
</ul>

<h3>Constraints</h3>
<ul>
<li>Each colour you print should be between 1 and 5.</li>
<li>In each weighings, you can use at most two balls of same colour.</li>
<li>Note that you can use scales as much times as you want (even zero).</li>
<li>Once your program printed the colour of the heavier balls, it should finish its work, i.e. you should exit the program. </li>
<li>Do not forget to <b>flush</b> standard output after each line you print.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>If you output incorrect colour (i.e. colour you printed is not that of heavier balls), your score will be zero.</li>
<li>Let <b>K</b> will be the number of times you used scales.</li>
<li>Then your score will be <b>100/K</b> points.</li>
<li>Please note that if <b>K</b> equals to zero, your score also will also be 100 points.</li>
</ul>


<h3>Example 1</h3>
<p>
Please note that the content in left side denotes output of your program where content in the right side denotes the response of judge which you should read as input. 
</p>
<pre><b>Input and Output</b>
1
1 1
1 1	
					0
1
1 1
1 5
					-1
2
5
</pre>

<h3>Example 2</h3>
<pre><b>Input and Output</b>
1
3 1 2 5
0
					4
1
0
1 2
					-1
1
0
1 5
					-2
2
5
</pre>

<h3>Explanation</h3>
<p>In the <b>first example</b>, you first printed :
<pre>
1
1 1
1 1
</pre>
</p>
<p>
This means that you want to use the scale. Each of the first and second pan has one ball of colour 1.
Don't forget to flush the standard output after printing this.
</p>
<p>
After that you should read the input, the difference of weights between the two pans, in this case, it will be 0. 
</p>
<p>
Now you printed : 
<pre>
1
1 1
1 5
</pre>
</p>
<p>
It means, that you decided to use scale again. Now first pan contains one ball of colour 1 and the second pan contains one ball of colour 5.
</p>
<p>
Now, you should read the input, the difference of weights between the two pans, in this case, it will be -1.
</p>
<p>
Now, you realize that ball of colour 5 is heavier than of colour 1. It means that 5th colour is the colour of heaviest ball. So your print 2 followed by 5 in separate lines and exit your program.
</p>
<p>
You have used scale total 2 times. Hence your score will be 100/2 = 50.
</p>

<p>In the <b>second example</b>, your score will be 100 / 3 = 33.3333333</p>

<h3>Notes</h3>
<p>
Please note that clearing the output buffer can be done by using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.
</p>

<p>
There are 5 test files. For each of the test file, score you will get is described above. The total sum of scores of your program for all the test files will be displayed on the contest page. This will be considered your final score for the problem. 
</p> 

<p>
Total points awarded for this problem will be equal to (your score) / (best score achieved in the contest) * 100. 
</p>