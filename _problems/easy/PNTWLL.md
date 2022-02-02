---
{"category_name":"easy","problem_code":"PNTWLL","problem_name":"Paint the Wall","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahil070197","problem_tester":null,"date_added":"20-10-2018","tags":{"0":"sahil070197"},"time":{"view_start_date":1540578600,"submit_start_date":1540578600,"visible_start_date":1540578600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Professor Sahil is a master artist, he always finds creative ways to teach lessons to his students.
Today in Painting class he took all the students of the class to a wall. Professor Sahil asked every student to paint the wall upto a certain integral height one by one (second boy starts once the first boy finishes painting) from the bottom with any color of their wish, except a student Mudit who was made to stand behind the wall and note down all the data i.e the height upto which each student painted and the color $Ci$ every student used. At the end of the painting session Professor asked Mudit to tell how many distinct colors are there on the wall. Mudit being a weak student asked you for help.

Formally, given a wall of infinite height, initially unpainted. There occur $N$ operations, and in ith operation, the wall is painted upto height $Hi$ with color $Ci$. Suppose in jth operation (j>i) wall is painted upto height $Hj$ with color $Cj$ such that $Hj$ >= $Hi$, the $Cith$ color on the wall is hidden. At the end of $N$ operations, you have to find the number of distinct colors(>=1) visible on the wall.

Help him find out the number of distinct colors on the wall.

###Input:

- The first line consists of single integer $T$ denoting the number of test cases.
- The second line contains 2 space separated integers $N$ and $M$, denoting the number of students and number of colors available (1 to $M$).
- The third line contains $N$-space separated integers ($Hi$ ) denoting the height upto which each student painted the wall.
- The fourth line contains $N$ space separated integers denoting the color ( $Ci$ ) the ith student used.


###Output:
Print the number for distinct colors on the wall for each test case.

###Constraints
- $1 \leq T \leq 100$
- $1 \leq N ,M \leq 10^5$
- **Sum of N over all test cases <= $5*10^5$**
- **Sum of M over all test cases <=$5*10^5$**
- $1 \leq Hi \leq10^9$
- $1 \leq Ci \leq M$


###Sample Input:
	3
	5 4
	1 2 3 4 5
	3 3 3 3 3
	5 4
	3 5 1 2 3
	1 2 3 4 3
	5 5 
	5 4 3 2 3
	1 2 3 4 5

###Sample Output:
	1
	2
	3
	
###EXPLANATION:
In the first test case, painted upto height 1, 2, 3, 4, 5 in the five operations, all with the same color. Hence, the number of distinct colors is 1.
