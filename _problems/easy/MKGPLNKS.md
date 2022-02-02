---
{"category_name":"easy","problem_code":"MKGPLNKS","problem_name":"Magical Planks","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^{5}$\n- $1 \\leq N \\leq 10^5$\n-  $S$ consists only of characters $B$ and $W$ \n- The sum of $N$ over all cases doesn\u0027t exceed $10^{5}$.\n","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- First line will contain $T$, number of testcases. Then the testcases follow.\n- The first line of each test case consists of an integer $N$ the number of planks\n- Second line of each test case consists of a string $S$ of size $N$,where the $i$ th character denotes the color of plank $i$ \n \n","inputFormatState":true,"outputFormat":"For each testcase, output a single integer denoting the minimum number of times Ryan has to paint a **single** plank such that all planks get the same color at the end.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4\n6\nBBWWWB\n5\nWWBWB\n2\nBB\n9\nWWBBBBBWW\n","output":"1\n2\n0\n1\n","explanation":"**Test case 1:**\nThe first test case is already described in the question.\n\n**Test case 2:**\nRyan can paint the third plank to $W$. After doing so the color string of planks become $W W W W B$. Then he can again paint the third plank to the color $B$. \nAfter doing so the string goes through following transitions:\n - The color of **third** plank changes to $B$. ( The string becomes $W W B W B$ )\n - The color of **second** and **fourth** plank changes to $B$. ( The string becomes $W B B B B$ )\n - The color of **first** plank changes to $B$. ( The string becomes $B B B B B$ )\n\nFinally, all planks have same color.\n\n**Test case 3:**\nAll planks have the same color.\n\n**Test case 4:**\nRyan can paint any of the planks numbered from $3$ to $7$ to $W$, and all these planks will be colored to $W$!","isDeleted":false}}},"video_editorial_url":"https://youtu.be/s70OfH-TuQo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"need_for_code","problem_tester":"","date_added":"5-10-2021","tags":{"0":"fzbz2021","1":"fzbz2021","2":"need_for_code","3":"simple","4":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MKGPLNKS","time":{"view_start_date":1637951400,"submit_start_date":1637951400,"visible_start_date":1637951400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MKGPLNKS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Ryan is a small town boy who has been given a task by his father. He has $N$ wooden planks, numbered from $1$ to $N$, which are colored either black or white.  


His task is to color all planks the same color! But there is some magic in the winds of his small town. Whenever he colors a plank of some color $C$ to color $P$, the neighboring planks which also have their color $C$ ,gets colored automatically to $P$. Now this process continues for the newly colored planks also. If none of the neighbors have same color, then nothing happens to the neighbors.  


Suppose Ryan has planks which have their coloring : $B B W W W B$ 
If Ryan colors the forth plank( of color $W$ ) to $B$, then the following will  happen to the planks: 

 $B B B B B B$ 


You have to determine the minimum number of planks Ryan has to paint so that all planks have the same color.Ryan can paint any plank to the color of his choice.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>