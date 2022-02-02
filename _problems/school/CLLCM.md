---
{"category_name":"school","problem_code":"CLLCM","problem_name":"Chef vs Doof","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/FBHk4gMKUBw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sarthakmanna","problem_tester":"","date_added":"18-06-2020","tags":{"0":"cole2020","1":"math","2":"sarthakmanna","3":"souradeep1999"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CLLCM","time":{"view_start_date":1594838700,"submit_start_date":1594838700,"visible_start_date":1594838700,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLLCM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef got into a fight with the evil Dr Doof. Dr Doof has decided to destroy all even numbers from the universe using his Evil-Destroy-inator. Chef has $N$ integers with him. To stop Doof, Chef has to find an odd number which is an integer multiple of all $N$ numbers that he has with him. Find if it is possible for Chef to prevent Dr Doof from destroying the even numbers.

Formally, given $N$ positive integers, find if there exists an odd number which is an integer multiple of all the given $N$ numbers. If yes, print **"YES"**, otherwise **"NO"**. You can print any letter in any case.

###Input

- First line contains $T$, number of testcases. Each testcase consists of $2$ lines.
- The first line of each test case consists of a positive integer $N$, denoting the number of positive integers Chef has.
- The second line of each test case contains $N$ space separated integers $A_i$ each denoting an integer that Chef has with him.

###Output

For every test case, if there exists such an odd number, print **"YES"** on a separate line, otherwise **"NO"**. The judge is case insensitive. That means, your code can print any letter in any case ( **"Yes"**, **"yes"** or **"YES"** are all accepted).

###Constraints 
- $1 \leq T \leq 10^3$
- $1 \leq N \leq 10^3$
- $1 \leq A_i \leq 10^3$

###Sample Input
	2
	5
	1 2 5 4 3
	1
	7

###Sample Output
	NO
	YES

###Explanation

For test $1$: There exists no odd number.

For test $2$: The possible odd numbers can be $7$, $21$, $49$, $315$, ...

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>