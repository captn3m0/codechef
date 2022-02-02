---
{"category_name":"easy","problem_code":"PROB","problem_name":"The Probability Of Winning","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ballon_ziq","problem_tester":"gamabunta","date_added":"28-04-2013","tags":{"0":"ballon_ziq","1":"july13","2":"probability","3":"simple","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/PROB","time":{"view_start_date":1373880701,"submit_start_date":1373880701,"visible_start_date":1373880600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">Chef, Artem and Eugene are the best of friends and teammates. Recently, they won a lot of money at the Are You Feeling Lucky Cup. Having put their fortune to test and emerging victorious, they are now busy enjoying their wealth. Eugene wanted to drink it all away. Chef and Artem had better plans. </p>
<p>Chef and Artem decided to go to Las Vegas and put more of their fortune to test! Eugene stayed at home and continues drinking.</p>
<p style="text-align:justify">
In Vegas, Chef and Artem found lots of interesting games. The most interesting one to them was the game of Lucky Tickets.
</p>
<p style="text-align:justify">Lucky Tickets is played using <strong>three</strong> kinds of tickets</p>
<p style="text-align:justify">
<ul>
<li><strong>Type-1</strong> called the winning ticket.</li>
<li><strong>Type-2</strong> called the losing ticket.</li>
<li><strong>Type-3</strong> called the try again ticket.</li>
</ul>
</p>
<p style="text-align:justify"><strong>Lucky Tickets</strong> is played as follows</p>
<p style="text-align:justify">You know there are <strong>T1</strong> tickets of <strong>Type-1</strong>, <strong>T2</strong> tickets of <strong>Type 2</strong> and <strong>T3</strong> tickets of <strong>Type-3</strong> before the game begins.</p>
<p style="text-align:justify">All the tickets are placed in a sealed box. You are allowed to take out only one ticket from the box. Of course, you cannot see inside the box while choosing the ticket.</p>
<p style="text-align:justify">
<ul>
<li>If you choose a <strong>Type-1</strong> ticket, you are declared winner of Lucky Tickets and double your money.</li>
<li>If you choose a <strong>Type-2</strong> ticket, you are declared loser of Lucky Tickets and lose all your money.</li>
<li>If you choose a <strong>Type-3</strong> ticket, you have to try your fortune again and pick another ticket from the box and the selection process starts all over again.</li>
</ul>
</p>
<p style="text-align:justify">Chef was able to convince the organizers of Lucky Tickets to let him go first and discard <strong>T4</strong> tickets. This means that Chef makes <strong>T4</strong> turns to choose exactly one ticket every turn, and despite what ticket he chose, he simply discards it. Chef also convinced the organizers to let Artem go right after he is finished.</p>
<p style="text-align:justify">What is the probability that Artem will win?</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. Each test case will consist of four space separeted integers <strong>T1, T2, T3 and T4</strong>, respectively.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single line containing the probability that Artem will win. Your answer will be considered correct if it has an absolute error less then <strong>10<sup>-6</sup></strong>.</p>
<h3>Constraints</h3>
<p><strong>1 ≤ T ≤ 10000</strong><br />
<strong>1 ≤ T1, T2, T3 ≤ 1000000000</strong><br />
<strong>0 ≤ T4 &lt; T1 + T2</strong></p>
<h3>Sample</h3>
<pre>
<strong>Input</strong>
2
2 2 1 2
2 3 4 1

<strong>Output</strong>
0.5
0.4

</pre><h3>Explanation</h3>
<p style="text-align:justify"><strong>In the first test case</strong>, the <strong>5</strong> possible outcomes after Chef discards 2 tickets is</p>
<p style="text-align:justify">
<ul>
<li><strong>(0,2,1)</strong> with probability <strong>(1/10)</strong>. Probability of winning is <strong>0</strong> - since there are no winning tickets!</li>
<li><strong>(2,0,1)</strong> with probability <strong>(1/10)</strong>. Probability of winning is <strong>1</strong> - since there are no losing tickets!</li>
<li><strong>(2,1,0)</strong> with probability <strong>(1/5)</strong>. Probability of winning is <strong>(2/3)</strong> - there are no second chances!</li>
<li><strong>(1,2,0)</strong> with probability <strong>(1/5)</strong>. Probability of winning is <strong>(1/3)</strong> - there are no second chances!</li>
<li><strong>(1,1,1)</strong> with probability <strong>(2/5)</strong>. Probability of winning is <strong>(1/3) + (1/3)*(1/2) = (1/2)</strong>. This is calculated by considering the two cases
<ul>
<li>The winning ticket is picked in the first turn - probability <strong>(1/3)</strong>.</li>
<li>A <strong>Type-3</strong> ticket is picked in first turn, followed by the winning ticket - probability <strong>(1/3)*(1/2)</strong>.</li>
</ul>
</li>
</ul>
</p>
<p style="text-align:justify">The over-all probability of winning is <strong>(1/10) + (2/15) + (1/15) + (1/5) = (1/2)</strong>.</p>
