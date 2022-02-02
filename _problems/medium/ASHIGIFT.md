---
{"category_name":"medium","problem_code":"ASHIGIFT","problem_name":"Saving a gift of love","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pnkjjindal","problem_tester":"xcwgf666","date_added":"10-03-2015","tags":{"0":"binary","1":"ltime22","2":"pnkjjindal","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/ASHIGIFT","time":{"view_start_date":1427617800,"submit_start_date":1427617800,"visible_start_date":1427617800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME22/mandarin/ASHIGIFT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME22/russian/ASHIGIFT.pdf">Russian</a>.</h3>
<p>Suraj, the Chief Prankster is back in action now and this time he has stolen the valentine's day gift given by Ashi (the love of Chef) to the Chef and ran away with it to Byteland.</p>
<p>Byteland is a not a regular place like Chef's town. The safest way from Chef's town to Byteland is through <i>the path of tasty dishes</i>. The path is named so because there are magical tasty dishes which appear to the traveler that no one can resist eating. Also, Suraj has added a strong sleep potion to each of the dish on this path to stop anyone from following him.</p>
<p>Knowing the devilish nature of Suraj, Ashi is concerned about the Chef and has asked all of Chef's town people to help. The distance from Chef's town to Byteland through the <i>the path of tasty dishes</i> is <b>X</b> units. They have the location where the magic dishes are and how many people are required to eat it completely. Anyone who eats a dish would go to a long sleep and won't be able to continue. They have the information about the tribal clans that live along the <i>the path of tasty dishes</i> who can be of real help in this journey. </p>
<p>The journey Chef and his friends can be described as follows: There is a total of <b>B</b> dishes on <i>the path of tasty dishes</i>. Each dish is located at some distance from Chef's town denoted by <b>x<sub>i</sub></b> for the i<sup>th</sup> dish ( <b>x<sub>i-1</sub></b> &lt;  <b>x<sub>i</sub></b>). To minimize the number of friends Chef has to leave behind, all of them have decided that exactly <b>y<sub>i</sub></b> of them will eat the i<sup>th</sup> dish, which is the required number of people needed to finish it completely. Also, there are a total of <b>C</b> tribal chef clans, each with their own population and location on the path that Chef and his friends will meet on their way to Byteland. They know that for some clan (say <i>i</i>), they are located at a distance of <b>p<sub>i</sub></b> ( <b>p<sub>i-1</sub></b> &lt;  <b>p<sub>i</sub></b>) from Chef's town with a population of <b>r<sub>i</sub></b>. And if a group of <b>at least q<sub>i</sub></b> men approaches them, they would be able to convince them to join their forces against Suraj.</p>
<p>Given the information about all this, help the Chef to find out the minimum size of the group (including him and his friends) he should start with to reach Byteland and get back Ashi's gift from Suraj.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each test case contains three lines which are as follows:<br /><br />
First line of each test case contains <b>X</b>, the distance of Byteland from Chef's town.<br /><br />
Next line contains an integer <b>B</b>, the number of dishes on <i>the path of tasty dishes</i>. Then follows <b>B</b> pairs of space separated integers of the form <b>x<sub>i</sub> y<sub>i</sub></b>, where <b>x<sub>i</sub> y<sub>i</sub></b> are as defined above for the i<sup>th</sup> dish.<br />
Next line contains an integer <b>C</b>, followed <b>C</b> space separated triplets of integers <b>p<sub>i</sub> q<sub>i</sub> r<sub>i</sub></b> as defined above.</p>
<h3>Output</h3>
<p>For each test case, print the minimum size of the group  (including Chef) that is needed to reach Byteland.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>B</b> ≤ <b>10000</b></li>
<li> Constraints on <b>C</b>
<ul>
<li>Subproblem 1 (25 points): <b> C = 0</b></li>
<li>Subproblem 2 (75 points): <b>1</b> ≤ <b>C</b> ≤ <b>10000</b></li>
</ul>
</li>
<li><b>1</b> ≤ <b>x<sub>i</sub></b> &lt; <b>X</b>, <b>x<sub>i</sub></b> &lt; <b>x<sub>i+1</sub></b></li>
<li><b>1</b> ≤ <b>p<sub>i</sub></b> &lt; <b>X</b>, <b>p<sub>i</sub></b> &lt; <b>p<sub>i+1</sub></b></li>
<li><b>1</b> ≤ <b>y<sub>i</sub></b> ≤ <b>10<sup>14</sup></b></li>
<li><b>1</b> ≤ <b>q<sub>i</sub></b> ≤ <b>10<sup>14</sup></b></li>
<li><b>1</b> ≤ <b>r<sub>i</sub></b> ≤ <b>10<sup>14</sup></b></li>
<li>All the positions, of the tasty dishes and tribal clans are distinct.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
10
2 1 3 8 1
0
10
2 1 3 8 5
0
10
2 2 3 8 5
3 1 2 1 4 3 2 9 1 1 

<b>Output:</b>
5
9
6
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> In the first case, there are no tribal clans, and two dishes, one which needs to be eaten by 3 chefs on their way and one to be eaten by 1 chef. Hence, we have to start with atleast 5 people in total to pass <i>the path of tasty dishes</i>.</p>
<p><b>Example case 2.</b> Similar as Example Case 1.</p>
<p><b>Example case 3.</b> In this case, if we start with 5 Chefs. At point 1, we have more than or equal to 2 chefs, hence the tribal clan of size 1 adds to the Chef's party and now they have size of 6. At position 2, three of them would be left behind eating a dish, leaving 3 of them to go ahead. At position 4, since the size is exactly 3, the tribal clan joins the chef's party making it of size 5. At position 8, all 5 of them will stop to eat the dish and none would go ahead. Similarly, if we start with 6, one of them would be able to pass position 8 and reach position 9, where it will also add one of the tribal clans to its party and reach Byteland.</p>
