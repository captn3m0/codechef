---
{"category_name":"school","problem_code":"CHEFEZQ","problem_name":"Chef and Easy Queries","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2 \r\n6 5 \r\n10 5 5 3 2 1 \r\n1 1\r\n100","output":"6\r\n101","explanation":"**Test Case 1**\r\n\r\nOn the first day, chef answers 5 questions and leaves the remaining 5 (out of the 10) for the future days.\r\n\r\nOn the second day, chef has 10 questions waiting to be answered (5 received on the second day and 5 unanswered questions from day 1). Chef answers 5 of these questions and leaves the remaining 5 for the future.\r\n\r\nOn the third day, chef has 10 questions waiting to be answered (5 received on the third day and 5 unanswered questions from earlier). Chef answers 5 of these questions and leaves the remaining 5 for later.\r\n\r\nOn the fourth day, chef has 8 questions waiting to be answered (3 received on the fourth day and 5 unanswered questions from earlier). Chef answers 5 of these questions and leaves the remaining 3 for later.\r\n\r\nOn the fifth day, chef has 5 questions waiting to be answered (2 received on the fifth day and 3 unanswered questions from earlier). Chef answers all 5 of these questions.\r\n\r\nOn the sixth day, chef has 1 question, which he answers. This is the first day he answers less than 5 questions, and so the answer is 6.\r\n\r\n**Test Case 2**\r\n\r\nChef answers 1 question a day for the first 100 days. On day 101, he is free.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"srikkanth_adm","problem_tester":"","date_added":"1-10-2020","tags":{"0":"cakewalk","1":"oct20","2":"srikkanth_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFEZQ","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFEZQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/CHEFEZQ.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/CHEFEZQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/CHEFEZQ.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/CHEFEZQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/CHEFEZQ.pdf) as well.

Chef published a blog post, and is now receiving many queries about it. On day $i$, he receives $Q_i$ queries. But Chef can answer at most $k$ queries in a single day. 

Chef always answers the maximum number of questions that he can on any given day (note however that this cannot be more than $k$). The remaining questions (if any) will be carried over to the next day.

Fortunately, after $n$ days, the queries have stopped. Chef would like to know the first day during which he has some free time, i.e. the first day when he answered less than $k$ questions. 

###Input:

- First line will contain $T$, the number of testcases. Then the testcases follow.
- The first line of each testcase contains two space separated integers $n$ and $k$.
- The second line of each testcase contains $n$ space separated integers, namely $Q_1, Q_2, ... Q_n$.

###Output:
For each testcase, output in a single line the first day during which chef answers less than $k$ questions. 

###Constraints 
- $1 \leq T \leq 10^5$
- $1 \leq $ sum of $n$ over all testcases $ \leq 10^5$
- $1 \leq k \leq 10^8$
- $0 \leq Q_i \leq 10^8$

### Subtasks
- Subtask 1 - 20% points - Sum of $Q_i$ over all testcases and days $\leq 3 . 10^6$
- Subtask 2 - 80% points - Original constraints

###Sample Input:
```
2 
6 5 
10 5 5 3 2 1 
1 1
100
```

###Sample Output:
```
6
101
```
	
###Explanation:
**Test Case 1**

On the first day, chef answers 5 questions and leaves the remaining 5 (out of the 10) for the future days.

On the second day, chef has 10 questions waiting to be answered (5 received on the second day and 5 unanswered questions from day 1). Chef answers 5 of these questions and leaves the remaining 5 for the future.

On the third day, chef has 10 questions waiting to be answered (5 received on the third day and 5 unanswered questions from earlier). Chef answers 5 of these questions and leaves the remaining 5 for later.

On the fourth day, chef has 8 questions waiting to be answered (3 received on the fourth day and 5 unanswered questions from earlier). Chef answers 5 of these questions and leaves the remaining 3 for later.

On the fifth day, chef has 5 questions waiting to be answered (2 received on the fifth day and 3 unanswered questions from earlier). Chef answers all 5 of these questions.

On the sixth day, chef has 1 question, which he answers. This is the first day he answers less than 5 questions, and so the answer is 6.

**Test Case 2**

Chef answers 1 question a day for the first 100 days. On day 101, he is free.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>