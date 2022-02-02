---
{"category_name":"medium","problem_code":"RECARR","problem_name":"C - Recover Array","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"28-11-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RECARR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There is an array $A$ of length $10^5$, consisting of zeroes and ones. You can ask queries about subarray sums. On a query $1 \leq l \leq r \leq 10^5$, you get the sum $A_l + A_{l + 1} + \ldots + A_r$. You can ask a maximum of $90000$ queries. Find the array $A$.

### Note:

Don't forget to flush the standard output after printing each line. It can be done using fflush(stdout) in C/C++, System.out.flush() in Java and sys.stdout.flush() in Python.

If you exceed $90000$ queries OR the $l, r$ asked in a query don't satisfy $1 \leq l \leq r \leq 10^5$, OR the array found by you in the end is not the same as array $A$, your program will get a Wrong Answer verdict.

The input is fixed and the judge is not adaptive.

### Input and Output:
To ask for the sum of the subarray from $l$ to $r$ output $1$ $l$ $r$. Once you know the array $A$, print $2$ $A_1$ $A_2 \cdots A_{10^5}$.

Below is a sample interaction.  For the sake of explanation, the array size is assumed to be $4$ here instead of $10^5$. The hidden array $A$ is $[1, 1, 0, 1]$

###Sample Input and Output:
```
Input / Judge Feedback           Your output / Your query

                                                    1 2 2
1
                                                    1 1 2
2
                                                    1 1 4
3
                                                    1 3 3
0
                                                    2 1 1 0 1
```
	
###EXPLANATION:
According to the asked queries, $A_2 = 1$, $A_1 + A_2 = 2$, $A_1 + A_2 + A_3 + A_4 = 3$, $ A_3 = 0$. The only binary array $A$ that satisfies these equations is $[1, 1, 0, 1]$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>