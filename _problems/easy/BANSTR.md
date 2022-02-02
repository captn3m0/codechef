---
{"category_name":"easy","problem_code":"BANSTR","problem_name":"Banana String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kabeer27","problem_tester":null,"date_added":"21-12-2019","tags":{"0":"greedy","1":"kabeer27","2":"medium","3":"plit2020"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BANSTR","time":{"view_start_date":1578942000,"submit_start_date":1578942000,"visible_start_date":1578942000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BANSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Gru has a string $S$ of length $N$, consisting of only characters $a$ and $b$ for banana and $P$ points to spend.

Now Gru wants to replace and/or re-arrange characters of this given string to get the lexicographically smallest string possible. For this, he can perform the following two operations any number of times.

1) Swap any two characters in the string. This operation costs $1$ $point$. (any two, need not be adjacent)

2) Replace a character in the string with any other lower case english letter. This operation costs $2$ $points$.

Help Gru in obtaining the lexicographically smallest string possible, by using at most $P$ points.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains two lines of input, first-line containing two integers $N$ , $P$.
- The second line contains a string $S$ consisting of $N$ characters.

###Output:
For each testcase, output in a single containing the lexicographically smallest string obtained.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $0 \leq P \leq 2N$
- $S$ only consists of $'a'$ and $'b'$


###Sample Input:
	1
	3 3
	bba

###Sample Output:
	aab
	
###Explanation:
We swap $S[0]$ and $S[2]$, to get $abb$. With the 2 remaining points, we replace $S[1]$ to obtain $aab$ which is the lexicographically smallest string possible for this case.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>