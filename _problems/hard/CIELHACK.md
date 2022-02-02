---
{"category_name":"hard","problem_code":"CIELHACK","problem_name":"Ciel and password cracking","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":"anton_lunyov","date_added":"12-09-2012","tags":{"0":"dynamic","1":"hard","2":"laycurse","3":"oct12"},"editorial_url":"http://discuss.codechef.com/problems/CIELHACK","time":{"view_start_date":1350293400,"submit_start_date":1350293400,"visible_start_date":1350293400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef Ciel now faces a crisis situation.
It is a really complicated situation, please read carefully.
Here, your task is to calculate the minimum expected time for slipping out of the crisis situation.
</p>

<p>
As you know, Ciel uses a safe having <i>Box and Ball System</i> as the combination of the safe (See <b>NOTE 1</b>).
And, of course, Ciel now knows that the number of the valid combinations for the safe is really large, and it is hard to open it if she forgets her combination. Hence Ciel wrote the combination in a text file and split the text file into <b>K</b> pieces, where each piece is compressed with some password. That is, she needs passwords for all <b>K</b> pieces for checking the combination of her safe.
</p>

<p>
Now Ciel has forgotten the combination for her safe and passwords for all <b>K</b> pieces!
However she remembers that the password for the <b>i</b>-th piece is a positive integer not greater than <b>N<sub>i</sub></b>, that is, there are only <b>N<sub>i</sub></b> possibilities for the <b>i</b>-th piece's password. So she'd like to try brute-force.
</p>

<p>
Since her computer is too slow,
Ciel decides to use computer centers in her town. There are <b>C</b> computer centers in all.
Since Ciel is afraid of leaking the combination for her safe,
Ciel will use exactly <b>K</b> distinct computer centers, one center for one piece.
</p>

<p>
Currently Ciel is in her restaurant. Apparently her restaurant and all computer centers are located along one street. Hence we will consider Ciel's restaurant and computer centers as points on a coordinate line. Let's assume that Ciel's restaurant has coordinate <b>0</b> while the coordinate of the <b>j</b>-th computer center is <b>X<sub>j</sub></b>. So the distance between Ciel's restaurant and the <b>j</b>-th computer center is |<b>X<sub>j</sub></b>| meters while the sign of <b>X<sub>j</sub></b> indicates in which direction of the street (positive or negative) Ciel should walk to this center.
</p>

<p>
After Ciel will choose <b>K</b> different centers for cracking passwords of her <b>K</b> pieces she will visit them in some order, crack all the pieces (one piece at one computer center) and return back to her restaurant. At each computer center she should wait until the password for the current piece will be cracked and only then she can proceed to the next center.
Ciel's walking speed is <b>V</b> meters per nanosecond, so she needs exactly |<b>A</b> − <b>B</b>| / <b>V</b> nanoseconds to walk from the point with coordinate <b>A</b> to the point with coordinate <b>B</b>.
</p>

<p>
In the <b>j</b>-th computer center, Ciel can use grid computing with at most <b>P<sub>j</sub></b> computers. Each computer is really faster than Ciel's one, it needs exactly <b>T<sub>j</sub></b> nanoseconds for checking one password. However computers are connected by really strange and bad network. So the step-by-step Ciel's plan for cracking the piece is the following:
<ul>
<li>Choose some set of computers (among available <b>P<sub>j</sub></b> computers) that will be involved in the cracking process. This takes no time.</li>
<li>Copy the compressed piece (which she decided to crack in this center) and the program that will be used for cracking directly into one of the chosen computers. This also takes no time.</li>
<li>Copy the piece and the program to all of the remaining computers by one of the scenarios that she may choose. The copying process will be made by network connection between computers and may take some time. However, if she chooses only one computer than this step should be omitted.</li>
<li>Simultaneously run the cracking program on all of the chosen computers.</li>
<li>Once one of the computers will crack the piece, save the password, terminate all the programs and delete all her information from all the computers. This takes no time since she will simply reboot and clear all the involved computers by the evil red button :)</li>
<li>Now she can proceed to the next center or to the restaurant if this was the last piece.
</li></ul>
</p>

<p>
Now we describe in detail this plan.
</p>

<p>
<b>The cracking program description.</b> 
The program that will be used for cracking proceeds as follows. At each step it chooses uniformly at random one of the valid passwords that was not chosen before and check this password (this takes exactly <b>T<sub>j</sub></b> nanoseconds). If the password is correct the program returns this password to the Ciel and terminates. Note that the computers can't connect to each other while this program is running at each of them. So it is possible that some passwords will be checked for several times at different computers.
</p>

<p>
<b>The network connection.</b> As was mentioned, the computers will distribute the piece and the program through the network connection between them. Bluntly speaking each time each computer that has the piece and the program try to connect to some other computer that has not yet this information and copy it to this computer. This process finishes when all required by Ciel computers have the piece and the program. Since the network connection is weird the time needed for connecting some computer to another computer is random! Namely it has the exponential distribution with mean <b>S<sub>j</sub></b> (see <a href="http://en.wikipedia.org/wiki/Exponential_distribution">wikipedia</a> for details). So the average time for connection between two computers is <b>S<sub>j</sub></b> nanoseconds.
But once connection between two computers is established some files or some data can be copied with no time. Note that computer can try to connect only to one other computer at the same time. However several computers can try to connect to the same computer and once one of them is connected all other computers will be immediately notified about this and stop the connection process with this computer.
</p>

<p>
<b>The connection scenario details.</b> Ciel can control how the computers will try to connect to each other. Namely, for each computer she can provide a preferences list, that is, the order in which this particular computer will try to connect to other computers after it receives the piece and the program. Initially the computer that receives the piece and the program from Ciel will start the process. Consider some computer <b>A</b> that has already received the piece and the program. It considers computers in its list one by one. If the current computer <b>B</b> in its list has already the piece and the program then it will skipped. This check requires no time since it can be made by instant ping from <b>A</b> to <b>B</b>. Otherwise the computer <b>A</b> will try to connect to the computer <b>B</b> and once connected copy required information to it. After that the computer <b>A</b> will proceed to the next computer in its list. It is possible that some other computers are trying to connect to the computer <b>B</b> at the same time when <b>A</b> doing this. In this case the first computer that establishes the connection will copy the piece and the program to <b>B</b> while other computers stop the connection process with <b>B</b> and proceed to the next computers in their lists. Only when all required computers will have the piece and the program Ciel simultaneously execute the program in all of them. Some examples for cracking are in <b>NOTE 2</b>.
</p>

<p>
So Ciel should choose the using computer center for each piece, choose the number of using computers and connection scenario in each computer center in order to minimize the expected needed total time to crack all the pieces and return back to her restaurant.
</p>

<p>
<b>NOTE 1.</b>
If you've never seen Box and Ball System, you may find it in <a href="http://www.codechef.com/FEB12/problems/BBSYSTEM">BBSYSTEM</a>. But it is not needed to understand Box and Ball System for solving this problem.
</p>

<p>
<b>NOTE 2.</b>
Consider the process of cracking the password with <b>N<sub>i</sub></b> = 3 by using 4 computers labeled by integers from 1 to 4. Let the correct password be 1, and wrong passwords be 2 and 3. Also since all computers are the same we may assume that Ciel will copy the piece and the program to the first computer and always choose the first several computers. 
Some of Ciel's choices are the following:
</p>

<p>
<b>1)</b> Ciel uses only 1 computer.
In this case the time for connections is not needed.
The running time is <b>T<sub>j</sub></b> nanoseconds if the computer checks 1 at first (probability 1/3).
The running time is 2 * <b>T<sub>j</sub></b> nanoseconds if the computer checks passwords in order (2, 1) or (3, 1) (probability 1/3).
The running time is 3 * <b>T<sub>j</sub></b> nanoseconds if the computer checks passwords in order (2, 3, 1) or (3, 2, 1) (probability 1/3).
The expected needed time is <b>T<sub>j</sub></b> * (1/3) + 2 * <b>T<sub>j</sub></b> * (1/3) + 3 * <b>T<sub>j</sub></b> * (1/3) = 2 * <b>T<sub>j</sub></b> nanoseconds.
</p>

<p>
<b>2)</b> Ciel uses 2 computers. Then there is only one scenario of how the piece and the program will be distributed among the computers: computer 1 will send the program and the piece to the computer 2.
The expected time for this is <b>S<sub>j</sub></b> nanoseconds. The expected running time of the cracking program is more complicated to calculate. For example, the running time will be <b>T<sub>j</sub></b> nanoseconds if the pair of the first checked passwords by the computers is one of (1, 1), (1, 2), (1, 3), (2, 1), (3, 1), where the first elements is checked by the computer 1, and second is checked the computer 2. The running time may be 2 * <b>T<sub>j</sub></b> or 3 * <b>T<sub>j</sub></b> nanoseconds in many cases.
</p>

<p>
<b>3)</b> Ciel uses 3 computers. In this case several preferences lists choices are available. For example, one of such choices can be represented as {(2, 3), (1, 3), (2, 1)}. Here (2, 3) is the preference list of computer 1, (1, 3) is the preference list of computer 2 and (2, 1) is the preference list of computer 3. For this scenario at first computer 1 will send the piece and the program to computer 2. And then both computers 1 and 2 will try to connect to computer 3.
If, for example, computer 2 will be connected to computer 3 at first then it copy the required information while the computer 1's trial will be canceled immediately. Then 3 computers may run the brute-force program. Here the expected time is secret. Please calculate by yourself.
</p>

<p>
<b>4)</b> Ciel uses 4 computers. Here we consider two examples of how preferences lists can be chosen.<br />

<b>4.1)</b> The lists are {(2, 3, 4), (1, 3, 4), (1, 2, 4), (1, 2, 3)}.<br />
Here computer 1 sends the piece and the program to computer 2 at first. Then both computers 1 and 2 will try to connect to computer 3 and first connected computer will copy the required information, while other computer's trial will be canceled. Finally all 3 computers 1, 2 and 3 will try to connect to computer 4 and first connected computer will copy the required information, while other computer's trials will be canceled.<br />

<b>4.2)</b> The lists are {(2, 3, 4), (1, 4, 3), (1, 2, 4), (1, 2, 3)}.<br />
Here computer 1 sends the piece and the program to computer 2 at first. Then computer 1 will try to connect to computer 3, while computer 2 will try to connect to computer 4. Assume that computer 1 will establish the connection earlier than computer 2. Then computer 1 will copy the required information to computer 3 and both computers 1 and 3 will try to connect to computer 4. Note that computer 2 is still trying to connect to computer 4. So we will have all 3 computers trying to connect to computer 4 at the same time. Though computer 2 started this process earlier, any computer among 1, 2, 3 can be the first connected to computer 4 with some probability. As before the first connected computer will copy the required information, while other computer's trials will be canceled.<br />
</p>

<h3>Input</h3>
<p>
The first line of the input contains a single integer <b>Q</b>, the number of test cases.
Each test case is described as follows:<br />
- The first line is empty.<br />
- The second line contains 3 numbers <b>C</b>, <b>K</b> and <b>V</b>.<br />
- The third line has <b>K</b> integers, where the <b>i</b>-th integer denotes <b>N<sub>i</sub></b>.<br />
- The next <b>C</b> lines describe the information about computer centers.
  The <b>j</b>-th of them contains 4 numbers <b>P<sub>j</sub></b>, <b>S<sub>j</sub></b>, <b>T<sub>j</sub></b> and <b>X<sub>j</sub></b>.
</p>

<h3>Output</h3>
<p>
Output for each test case should contain a single real number in a separate line, the minimum expected time for slipping out of the crisis situation. Your answer will be considered as correct if it has a relative error less than <b>10<sup>-6</sup></b>.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <b>Q</b> ≤ 5000 (<b>Q</b> is an integer)<br />
1 ≤ <b>C</b> ≤ 1000 (<b>C</b> is an integer)<br />
The sum of <b>C</b> in one test file is at most 5000.<br />
1 ≤ <b>K</b> ≤ min(5, <b>C</b>) (<b>K</b> is an integer)<br />
1 ≤ <b>V</b> ≤ 10<sup>20</sup> (<b>V</b> can be a non-integer)<br />
1 ≤ <b>N<sub>i</sub></b> ≤ 10<sup>18</sup> (<b>N<sub>i</sub></b> are integers)<br />
1 ≤ <b>P<sub>j</sub></b> ≤ 10<sup>18</sup> (<b>P<sub>j</sub></b> are integers)<br />
1 ≤ <b>S<sub>j</sub></b>, <b>T<sub>j</sub></b> ≤ 10<sup>20</sup> (<b>S<sub>j</sub></b> and <b>T<sub>j</sub></b> can be non-integers)<br />
-10<sup>20</sup> ≤ <b>X<sub>j</sub></b> ≤ 10<sup>20</sup> (<b>X<sub>j</sub></b> can be non-integers)<br />
Every real value has at most 6 digits after the decimal point.<br />
</p>

<h3>Example</h3>
<pre>
<b>Input:</b>
4

1 1 1.0
100
1 1.0 1.0 1.0

2 1 1.0
2
1 1.0 100.0 1.0
2 1.0 100.0 -2.0

1 1 1.0
3
3 34.0 97.0 1.0

10 4 4.1873
1278 9877 7383 8173
7612 731.371 35.0 726.123
9171 461.487 62.0 -39.340
1253 836.177 12.0 34.354
9134 888.228 56.0 384.172
1937 585.858 34.0 222.058
9938 992.124 50.0 333.058
1230 342.314 58.0 444.058
982 453.124 31.0 -555.058
7846 274.126 58.0 812.384
4526 553.412 44.0 58.58

<b>Output:</b>
52.5
130
182.333333333333333333333
12938.4586699
</pre>

<h3>Explanation</h3>

<p>
<b>Case 1.</b> Here Ciel has no choice other than she goes to the first computer center and cracks the password for the only piece by using 1 computer, then Ciel back to her restaurant.
The answer is 1 (going to the computer center) + 50.5 (cracking) + 1 (back to her restaurant) = 52.5.
In the cracking phase since Ciel uses only one computer the time for connection is not needed.
The program will check passwords one by one and 1 nanosecond is needed for checking one password.
So the running time will be <b>k</b> nanoseconds with probability 1% for 1 ≤ <b>k</b> ≤ 100.
Therefore the expected time for the cracking phase is 1 * 0.01 + 2 * 0.01 + ... + 100 * 0.01 = 50.5.
</p>

<p>
<b>Case 2.</b> Here Ciel has 3 choices.<br />
1) The first computer center is used with 1 computer (expected time = 1+150+1=152)<br />
2) The second computer center is used with 1 computer (expected time = 2+150+2=154)<br />
3) The second computer center is used with 2 computers (expected time = 2+126+2=130)<br />
Therefore the minimum expected time is 130.
Here the expected time for cracking phase in the last choice is calculated as follows:<br />
At first, the program and piece are sent by computer 1 to computer 2, and the needed average time is 1 nanoseconds.
Then 2 computers run the brute-force program.
Let the correct password be 1, and the wrong one be 2.
When (Password checked by first computer at first, Password checked by second computer at first) = (1, 1), (1, 2), (2, 1), Ciel will leave the computer center after this with program's running time 100. The probability of this case is 75%. Otherwise Ciel will leave with program's running time 200. Therefore the expected time for this computer center is 1 + 100*0.75 + 200*0.25 = 126.
</p>

<p>
<b>Case 3.</b> Here Ciel also has 3 choices.<br />
1) Ciel uses 1 computer: The expected time for connections = 0, the expected time for the program = 194.<br />
2) Ciel uses 2 computers: The expected time for connections = 34, the expected time for the program = 150.889.<br />
3) Ciel uses 3 computers: The expected time for connections = 51, the expected time for the program = 129.333.<br />
So the optimal way is using 3 computers.
</p>