---
{"category_name":"easy","problem_code":"MINIAND","problem_name":"Minion AND Range","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tds115","problem_tester":null,"date_added":"22-12-2019","tags":{"0":"math","1":"plit2020","2":"prefix","3":"simple","4":"tds115"},"problem_difficulty_level":"Simple","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/MINIAND","time":{"view_start_date":1578942000,"submit_start_date":1578942000,"visible_start_date":1578942000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINIAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
We all know Gru loves Agnes very much. One day Agnes asked Gru to answer some of her queries. She lined up $N$ minions in a straight line from $1$ to $N$. 

You are given an array $A$ which contains the height of minions. Agnes will ask him several queries. In each query, Gru has to tell whether the bitwise AND of  $A[L \ldots R]$ is EVEN or ODD. Since Gru is busy planning the biggest heist on Earth, he asks for your help.


###Input:
- First line of the input contains an integer $T$ denoting the number of test cases.
For each test case:-
- First line contains an integer $N$ denoting the number of elements.
- Second line contains $N$ spaced integer representing array elements.
- Third line contains $Q$ representing number of query.
- Next $Q$ lines contains two integer $L$ and $R$ as defined above.

###Output:
For each query, output "EVEN" or "ODD" without quotes.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $1 \leq A_i \leq 10^5$
- $1 \leq Q \leq 10^5$



###Sample Input:
    1
    5
    1 3 2 4 5
    3
    1 2 
    1 5
    3 4

###Sample Output:
    ODD
    EVEN
    EVEN
         
###Explanation

- For the first query, the bitwise AND of 1 and 3 is 1, which is Odd. Hence the first output is ODD.
- For the third query, the bitwise AND of 2 and 4 is 0, which is Even. Hence the third output is EVEN.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>