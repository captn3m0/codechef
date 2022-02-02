---
{"category_name":"easy","problem_code":"SCHTEST","problem_name":"How many Scholarships","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"taran_adm","problem_tester":null,"date_added":"29-10-2019","tags":{"0":"taran_adm"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1572712200,"submit_start_date":1572712200,"visible_start_date":1572712200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SCHTEST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
The ZCO scholarship contest offers scholarships to first time ZCO participants. You are participating in it for the first time. So you want to know the number of participants who'll get the scholarship.

You know that the maximum number of scholarships offered is $R$ and there are a total of $N$ participants numbered from $1$ to $N$. Out of these, you know the set of people (denoted by $X$) who you know, had participated in previous year ZCOs and hence, they shall not get the scholarship.

Further, as the world isn't free from plagiarism, so is the case with the scholarship contest. And from your secret sources, you also know the set of people (denoted by set $Y$) who were involved in plagiarism and therefore aren't eligible for scholarship either.

Find out the number of participants who shall get the scholarship.

PS: Don't ask how so many scholarships are being offered when you see the constraints on $R$. You never questioned it when in mathematics classes, some person bought $80$ watermelons twice just to compare them and save $₹1$. 

###Input:

- The first line will contain a single integer, $T$, the number of testcases. Then the testcases follow. 
- The first line of each test case contains four integers; $N$, $R$, $|X|$ and $|Y|$ denoting the number of participants, maximum number of scholarships offered, number of old participants, and the number of participants involved in plagiarism, respectively.
- The second line of each test case contains $|X|$ space separated integers $x_1, x_2 \ldots x_{|X|}$ denoting the indices of people who participated in previous years. If $X$ is empty, this line is skipped and no empty line is in the input.
- The third line of each test case contains $|Y|$ space separated integers $y_1, y_2 \ldots y_{|Y|}$  denoting the indices of people who are involved in plagiarism. If $Y$ is empty, this line is skipped and no empty line is in input.

###Output:
For each testcase, print a single integer in a new line, denoting the number of participants who shall get the scholarship.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 10^{15}$
- $0 \leq R \leq 10^{15}$
- $0 \leq |X|, |Y| \leq min(N, 2*10^5)$
- $1 \leq x_i, y_i \leq N$
- All $x_i$ are distinct
- All $y_i$ are distinct
- Sum of $|X|$ over all test cases does not exceed $5*10^5$
- Sum of $|Y|$ over all test cases does not exceed $5*10^5$

###Subtasks
- 20 points : $1 \leq N \leq 10^3$, and the sum of $N$ over all test cases does not exceed $3*10^3$
- 30 points : $1 \leq N \leq 2*10^5$, and the sum of $N$ over all test cases does not exceed $5*10^5$
- 50 points: Original constraints

###Sample Input:
```
3
5 3 0 1
4
10 2 4 6
3 1 7 6
4 3 1 5 9 7
10 4 4 6
3 1 7 6
4 3 1 5 9 7
```
###Sample Output:
```
3
2
3
```
###EXPLANATION:
- In the first testcase, only participant $4$ is involved in plagiarism, and thus not eligible for the scholarship. No user has participated in previous years, and so no empty line is there in the sample. All participants except participant $4$ are eligible for the scholarship, but only three of them get it because $R = 3$.
- Both second and third testcases are the same, except for $R$. In both samples, only participants $2$, $8$ and $10$ are eligible for scholarships.
- In the second testcase, since the maximum number of scholarships is $2$, only $2$ participants get scholarships.
- In the third testcase, all three eligible participants get scholarships.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>