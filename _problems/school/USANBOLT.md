---
{"category_name":"school","problem_code":"USANBOLT","problem_name":"Usain Bolt vs Tiger","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/7BhPMvThbho","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bipin2","problem_tester":"","date_added":"16-12-2019","tags":{"0":"bipin2"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/USANBOLT","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=USANBOLT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Back in 2015, Usain Bolt announced that he'll be retiring after the 2017 World Championship. Though his final season did not end gloriously, we all know that he is a true legend and we witnessed his peak during 2008 - 2013. 

Post retirement, Usain Bolt is still leading an adventurous life. He's exploring the unexplored parts of the globe. But sometimes he gets bored, and reads questions asked about him on Quora. One such question he read was, "Who would win a race between Usain Bolt and a tiger if the race is on a straight line track and the tiger is $distancetoBolt$ meters behind Bolt? The finishing point is $finish$ meters away from Bolt's starting position. The tiger starts with an initial speed of $0$  $meter/second$, and will accelerate itself with $tigerAccelaration$  $m/s^2$. Bolt can run with a constant speed of $boltSpeed$  $m/s$ from start to finish. Given these values, find out who will win the race - Bolt or the tiger? "

Note that Bolt will win the race if and only if he touches the finishing line before the tiger touches it. If both of them finish together, the tiger is announced as the winner since Bolt was given an initial advantage. See the figure below for more clarity.

<img src="https://s3.amazonaws.com/codechef_shared/download/ICPCAM19/Capture.PNG
"  height="250" width="550">


Since Bolt was busy practicing in the tracks during his Physics school classes, he is asking for your help to solve the question. Can you please help him?

He just remembers two formulae from the class, and thinks that they will be useful to you:

 $Displacement (S) $ = $ut$ +$ (1/2)at^2$ where $u$ is the initial velocity , #$ $is the acceleration and $t$ is the time taken.

$Velocity$ = $Displacement /Time$

###Input:

- The first line will contain $T$, the number of testcases. Then the description of each test case follow. 
- Each test case contains 4 integers $finish, distancetoBolt, tigerAccelaration, boltSpeed$. 

###Output:
For each testcase, output in a single line, the word "Bolt" or "Tiger" without quotes, depending on whether Bolt wins or the tiger wins.

###Constraints 
- $1 \leq T \leq 100000$
- $1 \leq finish\leq 10^5$
- $1 \leq distancetoBolt\leq 10^5$
- $1 \leq tigerAccelaration\leq 10^5$
- $1 \leq boltSpeed\leq 10^5$

###Sample Input:
	2
	10 100 10 10
	100 10 5 10
###Sample Output:
	Bolt
	Tiger
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>