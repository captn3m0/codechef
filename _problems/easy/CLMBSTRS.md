---
{"category_name":"easy","problem_code":"CLMBSTRS","problem_name":"Climbing Stairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kuruma","problem_tester":"laycurse","date_added":"9-12-2012","tags":{"0":"combinatorics","1":"feb13","2":"kuruma","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CLMBSTRS","time":{"view_start_date":1360580275,"submit_start_date":1360580275,"visible_start_date":1360580275,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>There is a ritual that some monks of Byteland perform every century as a sign of respect and worship towards BOOL, the God of Byteland.</p>
<p>All the monks train for many years in order to accomplish an extremely hard task, that is the one of accessing the sacred temple of Byteland, where only the best of the bests monks are allowed to enter and worship their god, BOOL.</p>
<p>The training the monks perform, usually consists of several physically and intellectually challenging tasks, trained and perfected over the course of many years, so that one of them can be eligible for the ultimate task that is a combination of both physical effort as well as mental effort.</p>
<p>This final task is the actual possibility of trying to access the sacred temple of Byteland, that is located on the top of a very high mountain, where reckless storms and heavy rains usually occur.</p>
<p>The access to this mountain is done by climbing an enourmous set of stairs that spiral around the mountain until it ends on the top of the mountain where the sacred temple door is located.</p>
<p>The door can only be opened by unlocking it. To unlock the door, the monk only sees a hole in it, a lever, and he also spots a very large amount of little round stones on the ground, and he understands that the only way to open the door is to place an exact pre-determined amount of stones trough that hole, so that when the number is correct, he will push the lever down, and the door will open. If this number is incorrect, the lever will be locked by the incorrect stones and a whole new century must pass so that the storms can erode the stones and a new monk can be selected for the task.</p>
<p>This year, YOU were the one selected to climb the huge set of stairs, and you are extremely well prepared... You have done your training very well and you are also aware of two very important facts that will be key for your success... The favourite number base on Byteland is base 2, and Gods favourite number is the largest number on this base. You also know that the number of stones you need to place on the door hole is related to the way everyone climbs the stairs and with the number of stairs itself. </p>
<p>As the monks take several supplies for the demanding trip, they can only climb either one or two steps at a time. You understood that the number of stones you need to place on the door is closely related with the way you climb the stairs. Suppose the number of stairs you need to climb is <b>N</b>. Also, let the number of ways you have of climbing those <b>N</b> stairs be <b>M</b>. Now, the number of stones required is equal to the number of 1's in the base-2 representation of (<b>M</b> modulo 1000000007).</p>
<p>You won't fail, as you are extremely well ready, but you have made everyone on your town extremely excited with your journey, so, given the number N of steps you are to climb and a guess, <b>G</b>, from the people of your village, you need to see if they are correct or not.</p>
<p>More formally, given a number <b>N</b> of steps to climb and a guess <b>G</b> from your village, you need to check if guess <b>G</b> is accordingly to your correct calculations. They are correct if you manage to enter the temple using their guess, or incorrect otherwise. You should output the string “CORRECT” if they are correct, or “INCORRECT” if they are incorrect. (Quotes for clarity only). Please read the section "Output Explanation" for some clarification on the example cases.</p>
<h3>Input</h3>
<p>The first line of each official test case file will contain an integer <b>T</b>, that stands for the number of test cases on that specific test case file.<br />
The next <b>T</b> lines contain two-space separated integers, <b>N</b> and <b>G</b>, respectively, the number of steps the monk needs to climb and the guess from the village's population.</p>
<h3>Output</h3>
<p>Output will contain the string "CORRECT" or "INCORRECT" on a single line, as explained above on the problem statement.</p>
<h3>Constraints</h3>
<p>In each file, <b>T</b> = 100000, i.e., each file will contain 100000 test cases (this value needs to be read from standard input).</p>
<p>1 ≤ <b>N</b> ≤ 1000000</p>
<p>0 ≤ <b>G</b> ≤ 50</p>
<p>Your code will be judged against several input files.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
100000
1 1
7 4
(and 99998 more test cases...)

<b>Output:</b>
CORRECT
INCORRECT
(and 99998 more answers...)
</pre>
<h3>Output Explanation:</h3>
<p>On the first case, when there is only one step to climb, there is only one way to do it. 1 in binary is 1, and as the village's population guess is also 1 the answer is correct.</p>
<p> On the second case, there are 21 ways of climbing the stairs altogether. 21 in binary is 10101, that contains three ones. As the village's population guess was 4, the answer is therefore incorrect. </p>
