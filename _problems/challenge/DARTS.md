---
{"category_name":"challenge","problem_code":"DARTS","problem_name":"DARTS501","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":null,"date_added":"12-03-2014","tags":{"0":"challenge","1":"expectation","2":"iscsi","3":"june14"},"editorial_url":"http://discuss.codechef.com/problems/DARTS","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/DARTS1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/DARTS1.pdf">Russian</a>.</h3>
<p>Note: This is an interactive problem.  Interactive problems differ from classic problems in that your solution will send and receive data from a special judge program instead of from static files. Pay special attention to the notice on output buffering described in the "Input + Output" section below.</p>
<p>In this problem you will play the most famous darts game: 501 with double out.</p>
<p>
The dartboard is circular board, divided into 20 numbered sections, scoring from 1 to 20 points, by wires running from the small central circle to the outer circular wire. Circular wires within the outer wire subdivide each section into single, double and triple areas. You can find the full description of 501 double out game with rules of playing on dartboard <a href="http://www.nicedarts.com/how_to_501.html">here</a>.</p>
<p> The 501 double out game:<br />
Each leg your score start from 501 and your darts score will decrease this score. In each turn you will have three darts to throw. The leg finish if your score is 0 and your last dart is in the double. A new leg starts with the score 501 just after finishing the previous one and <b> the remaining darts of the finishing turn will not be considered used.</b> If your current turn score is greater than your score, then you will lose remaining darts of this turn and the score will remain same. If one uses all his darts and neither the leg finishes nor the turn, then the current turn score will be added to the total score if it is a valid turn. It is highly recommended to use our offline tester given below to understand the gaming process more clearly.</p>
<p> Examples:</p>
<li>
If your score 501 before the turn and you double 20, triple 19 and bull's eye, then you earn in this turn 2*20+3*19+2*25=147 score, then your scores after this turn is 501-147=354.</li>
<li>
If your score 100 before the turn and you throw triple 20 and after that double 20, than this leg finishes, and you use in this turn 2 darts.</li>
<li>
If your score 20 before the turn and you throw simple 19, then your scores go back to 20 (<b>because from 1 you cannot checkout with double</b>), and you lose those darts what in your hand for this turn. This turn we will call invalid turn.</li>

<p>
The center of the board is (0,0), the top of the board is (0,-1), the left side is (-1,0), etc. So the dartboard is a circle of radius 1. For every tests belongs an Gaussian distribution with zero expected value and a standard deviation between 0 and 1. This will responsible for the throw precision. Every player has some (between 2 to 5) preferred place where he like to throw, to this place the throws are more precise. If your throw target covered by multiple preferred area than the better deviation is selected. All these are hidden. More description in the example section.
</p>
<p>
Firstly you can throw darts for practice. This phase is to detect how the current player play darts. After that you can use 99999 darts. Your score is the sum of the score of your valid turns. You can not aim your darts outside the 1.2 radius. ( If the dart flew outside this radius that is valid but your target can not be outside this circle.)
</p>
<h3>Input + Output</h3>
<p> The output begins with a line containing an integer the number <b>N ≤ 100000 </b>of darts you would like to throw in practice mode. After that you can throw <b>N</b> darts</p>
<li><b>A B</b></li>
<p> A,B can be double numbers this is your target position<br/><br />
after each throw <b> you will get the answer in one line </b> with format:</br/></p>
<li><b>C D M S</b> </li>
<p>(C,D) is the real position where your darts flew. M is an integer between 1 and 3 representing the dart multiplier (1- simple, 2- double, 3- triple) and S is another integer number representing dart score (without a multiplier).<br />
Now the compete mode begins. Here will use 99999 darts. (This doesn't mean you will throw 99999 darts. You may lose some dart in invalid turns.) The communication is the same as the training mode.</p>
<p><i><br />
Attention: the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.</i>
</p>
<h3>Test Case Generation</h3>
<p>
The 20% of the test files the deviation <b>V</b> selected from [0.01,0.1], the 60% selected from [0.1,0.3], and the remaining 20% selected from [0.3,1] interval.<br />
After that generate a number P between 2 and 5 (inclusive) how many preferred position has the player. Each preferred position is a circular area with center (X,Y) and radius R. Then the test case generator will generate X, Y and R, where (X,Y) are two real numbers inside the 1 radius circle centered at (0,0) and R is between 0.05 and 0.3. A multiplier Z for each preferred place will be generated, Z will be between 0.25 and 0.75, this means here the deviation is less by this multiplier (Z*V instead of V).</p>
<p>
We have 30 official test files. You must correctly solve all test files to receive "Correct Answer". During the contest, your overall score is the sum of the scores on the first 6 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 24 test files. Note, that public part of the tests may not contain some border cases.</p>
<h3>More information about the game: </h3>
<p><a href="http://www.nicedarts.com/how_to_501.html"> Hint. </a> </p>
<p> The dimensions of the<a href="http://www.darts501.com/Bristleboards.htm"> board. </a> </p>
<li> outside of the double 170mm from the center. </li>
<li> outside of the triple 107 mm from the center. </li>
<li> bull's eye diameter is 12.7 mm. </li>
<li> bull's diameter is 31.8 mm. </li>
<li>double and triple inside width is 8 mm. </li>
<p>
For normal distribution we have used this <a href="http://www.cs.gmu.edu/~sean/research/mersenne/MersenneTwister.java">implementation.</a>
</p>
<h3>Example (of a throw) </h3>
<p>Lets the current deviation V = 0.1, and we have two preferred places </p>
<li> the first center is (0,0.5) with radius 0.1, and the deviation multiplier 0.5 this means in this circle the deviation is 0.05. </li>
<li> the second center is (-0.3,0.0) with radius 0.2, and the deviation multiplier 0.3 this means in this circle the deviation is 0.03. </li>
<p>if our target is (0,0.55) which is inside the first preferred place then the deviation multiplier here will be 0.05. So we ask two random numbers (K,L) from our normal distribution generator<br />
(which generate with 0 expected value and 1 standard deviation). The real target will be (0+K*0.05,0.55+L*0.05). E.g. K=0.11, L= -0.28<br />
then the dart will flew (0.0055,0.536).</p>
<p>
If our target is (0,0.7) which is outside of both the preferred places then the deviation multiplier here will be V = 0.1. In that case, the real target will be (0+K*V, 0.7+L*V), where (K,L) are two random numbers generated from our normal distributor.
</p>
<h3>Offline tester/Visualization </h3>
<p>
<a href="http://www.codechef.com/download/Darts_New.jar">Darts.jar</a></p>
<p>
<a href="http://www.codechef.com/download/darts.txt">How to use it.</a></p>
<p>
<a href="www.codechef.com/download/dartspractice.jar">Final Darts.jar</a></p>
<p>
Note: we can not guarantee the offline tester produce the same score as the online judge.</p>
