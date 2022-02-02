---
{"category_name":"medium","problem_code":"PEOPLOVE","problem_name":"Love among People","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"23-06-2016","tags":{"0":"admin2"},"time":{"view_start_date":1467052140,"submit_start_date":1467052140,"visible_start_date":1467052140,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>There are <b>n</b> people in a group. Some of them love each other. You are given <b>m</b> such relationships. Each relationship is represented by two integers <b>u, v</b>, denoting that person <b>u</b> and <b>v</b> love each other.
</p>
<p>
One day the people went to a magician asking about an issue bothering them for long time. The magician said "It is not a good omen if two persons love each other. There is no joy in the love if you get reciprocated for your love.  So from now on, you guys have to make sure that whoever loves each other among you should decide the person who will be loved and who will love.".
</p>
<p>
Formally, he asked each pair of persons <b>u, v</b> which used to love each other to decide among themselves whether <b>u</b> will love <b>v</b> or <b>v</b> will love <b>u</b>, but both of them can't love each other.
</p>
<p>
Truly scared and saddened by the magician's suggestion, people decided that they will change their relationships according to the suggestion. Soon they realized that by following the suggestion blindly it might happen that a person loves a lot of other people and in turn very few people love him, which will make a person really sad :(. Sometimes it might also happen a lot of persons love a person, but that person loves too less persons, in that case also, he will feel sad too. In particular, sadness of a person will be equal to absolute difference of the number of persons that he loves and number of persons that love him.
</p>
<p>
Now they want people to be as less sad as possible. Formally, they want to minimize the maximum value of sadness over all the persons in the group. Can you please help them in this daunting task? Formally, you have to tell for each loving pair <b>u, v</b>, which way the love should be?
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>First line of the each test case contains two space separated integer <b>n, m</b> denoting the number of persons and number of their love relationships.</p>
<p>Each of the next <b>m</b> lines contains two space separated integers <b>u, v</b> denoting that persons <b>u</b> and <b>v</b> love each other.</p>
<h3>Output</h3>
<p>For each test case, output <b>m + 1</b> lines. </p>
<p>First line should contain a single integer the minimum value of maximum sadness over all persons that they can achieve. </p>
<p>In the next <b>m</b> lines, <b>i</b>-th line should contain two space separated integers <b>u, v</b> denoting that person <b>u</b> loves person <b>v</b>. If <b>v</b> loves person <b>u</b>, then print <b>v, u</b>.</p>
<p>Please note that there can be more than one possible ways of changing the relationships. In those situations, you are allowed to print any of them</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ <b>10<sup>6</sup></b></li>
<li>1 ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li>Sum of <b>N</b>'s' over all the test cases in a single file won't exceed <b>10<sup>6</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 (30 points)</b></p>
<ul>
<li>You just have to tell the minimum value of maximum sadness factor. You don't require to print one such way of changing relationships. Note that if you want to solve this subtask only, the first line of your output should be <tt>"SMALL_SUBTASK"</tt> (without quotes). After that, for each test case, you should just print the first line corresponding the minimum of maximum sadness.
</li>
</ul>

<p>
<b>Subtask #2 (70 points)</b></p>
<ul>
<li>For solving this subtask, your should print first line as "BOTH_SUBTASKS" (without quotes). The output format for this case will be similar to that is written in output section. </li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
2
2 1
1 2
3 2
1 2
2 3

<b>Output:</b>
<b>For solving both the subtasks.</b>
BOTH_SUBTASKS
1
1 2
1
1 2
3 1

<b>For solving only a single subtask</b>
SMALL_SUBTASK
1
1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> There are two persons. Person 1 and 2 love each other. Now, according to magician's suggestion, if person 1 loves person 2, then sadness of both the persons will be equal to 1. Same is the case with person 2 loving person 1. Hence answer is 1.</p>
<p><b>Example case 2.</b> There are three persons. Person 1 and 2 love each other. Person 2 and 3 love each other. Now, according to magician's suggestion, if person 1 loves person 2 and person 3 loves 1. Then, sadness of all three persons will be equal to 1. This is the best that they can do. For example, if the person 1 loves 2 and person 1 loves 3 too, then sadness of first person will be 2, which will be worse than previous case. Hence answer is 1.</p>
