---
{"category_name":"medium","problem_code":"SPCLN","problem_name":"Cleaning the Space","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nssprogrammer","problem_tester":null,"date_added":"23-05-2017","tags":{"0":"nssprogrammer"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/SPCLN.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/SPCLN.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/SPCLN.pdf">Vietnamese</a> as well.</h3>

<p>A spacecraft is all set to travel through a long inter-galactic tunnel. The tunnel consists of <b>N</b> stationary space debris. In order to successfully complete the mission the spacecraft needs to destroy all the space debris. The control unit of the spacecraft has <b>M</b> buttons which can be used to destroy the space debris. Pressing a particular button may result in the destruction of some (possibly multiple) particular space debris. Once a space debris is destroyed its mass is converted into energy, which is eventually absorbed by the spacecraft in order to increase its speed. The amount of energy released from the disintegration of a particular space debris depends upon the button which has been used to destroy that space debris. A matrix <b>E</b> which contains this information is known as "Energy Vector". For each space debris i and each button j, <b>E[i][j]</b> is a positive integer between 0 and 100, which is the energy released after destroying space debris i using button j. The value of <b>E[i][j]</b> is -1 if space debris i cannot be destroyed using button j.</p>

<p>Some space debris have dependencies on other space debris in order to get destroyed. The spacecraft must destroy some specific space debris before causing the destruction of some other space debris. There are a total of <b>K</b> unique dependencies. Each dependency contains two space separated integers i and j, which denotes that the space debris i must be destroyed before destroying space debris j.</p>
<p> A particular button can be pressed only once and the buttons can be pressed only in order from 1 to <b>M</b> (ie. button 2 cannot be pressed before button 1 ). While pressing a specific button a binary string <b>T</b> of length N called as "Target Vector" is passed to the control unit of the spacecraft. For each space debris i, <b>T[i]</b> is 1 if you want to destroy that space debris with that button otherwise</b>T[i]</b> is 0. When the button is pressed all the space debris mentioned in the Target Vector simultaneously gets destroyed.</p>
<p>The spacecraft may destroy any number of space debris using a particular button, including none, as long as they can be destroyed by that button and the spacecraft has already destroyed any required prerequisite space debris.</p>
<p>Now the task is to compute the maximum average energy that can be absorbed by the spacecraft throughout the entire mission.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains two space separated integers <b>N</b> and <b>M</b>.</li>
<li><b>N</b> lines follow, each containing <b>M</b> integers. The jth integer of the ith line represents the value of <b>E[i][j]</b>.</li>
<li>The next line contains an integer <b>K</b>.</li>
<li>This is followed by <b>K</b> lines, each containing two space separated integers <b>u</b> and <b>v</b>, where <b>u</b> is never equal to <b>v</b>. it means that space debris <b>u</b> should be destroyed before space debris <b>v</b></li>
</ul>

<h3>Output</h3>
print a single real number which is the maximum average energy, rounded to two digits after the decimal point.

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>M, N</b> ≤ 100</li>
<li>0 ≤ <b>K</b> ≤ 100</li>
<li>-1 ≤ <b>E[i][j]</b> ≤ 100</li>
<li>1 ≤ <b>u, v</b> ≤ <b>N</b></li>
<li>It is guaranteed that there always exists a way to destroy <b>N</b> space debris using <b>M</b> buttons</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3 3 
10 70 100 
80 50 40 
80 20 40 
2 
1 2 
1 3 

<b>Output:</b>
50.00
</pre>

<h3>Explanation</h3>
<p>One way the spacecraft can destroy the space debris is :</p>
<p>Destroy the first space debris by pressing the second button.</p>
<p>Destroy the second and third space debris using the third button.</p>
<p>The average energy is (70 + 40 + 40)/3 = 50.00, and this is optimal.</p>