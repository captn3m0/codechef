---
{"category_name":"medium","problem_code":"BENDSPF7","problem_name":"7 - Wedding Bells","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"31-12-2020","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1612018800,"submit_start_date":1612018800,"visible_start_date":1612018800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BENDSPF7","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
It's wedding season in Chefland, and everyone can feel the magic! There are two towns in Chefland, town A and B, with a population of $N$ people in each. Since marriage from within the same town is forbidden, you as a match maker need to match people from town A to people from town B. Since people of Chefland are very amicable, most people have no problem marrying anyone from the other town. However, there are $M$ pairs of people $(A_i, B_i)$ who are incompatible with each other. Find the maximum number of people you can pair up for marriage as a wedding planner! 

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each testcase contains  two integers $N, M$. 
- The next $M$ lines of each testcase contain the incompatible pairs $(A_i, B_i)$.

###Output:
For each testcase, output in a single line the maximum number of people you can match.

###Constraints 
- $1 \leq T \leq 1000$
- $2 \leq N \leq 10^5$
- $1 \leq M \leq 10^5$
- $1 \leq A_i, B_i \leq N$
- For two pairs $(A_i, B_i), (A_j, B_j)$ atleast one of $A_i \neq A_j$ or $B_i \neq B_j$ is true
- Sum of $N$ across all testcases is $\leq 10^6$
- Sum of $M$ across all testcases is $\leq 10^6$

### Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input:
	1
	3 6
	1 1
	2 1
	2 2
	2 3
	3 2
	3 3

###Sample Output:
	4
	
###Explanation:
The pairs $(1,1), (2,1), (2,2), (2,3), (3,2), (3,3)$ are forbidden. The optimal match making in this case is as follows: $(1,2), (3,1)$, where $4$ people have been paired up. We can prove that no more than $4$ can be paired up.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>