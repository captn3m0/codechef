---
{"category_name":"medium","problem_code":"MORTGAGE","problem_name":"Mortgage","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"24-12-2019","tags":{"0":"balajiganapath"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MORTGAGE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Alexey is buying a new apartment! To pay for it, he is going to take one or more loans. 

There are $n$ banks in the city. The $i$-th bank offers loans up to $s_i$ rupees with a daily compound interest rate of $p_i$. He gets all the loans on Day 0.

Thereafter, on each day, Alexey can afford to spend at most $t$ rupees on repaying the loans (and the interest!). He wants to finish repaying all the loans completely within the next $m$ days (or faster). What is maximum amount that he can take out on loan on Day 0?

So, the full process is as follows:

* Alexey takes any non-negative real amount of rupees $0 \le x_i \le s_i$ from each bank. Sum $x_1 + \dots + x_n$ is what we want to maximize.
* On each of the next $m$ days, as long as there are loans remaining, the following happens: The remaining amount in the i-th loan, if it is yet to be completely paid off, gets multiplied by $(1 + \frac{p_i}{1000000})$. Then Alexey can distribute up to $t$ rupees between the loans to repay them. He can partially repay them as well.

###Input:
- The first line will contain three integers: $n$, $m$ and $t$
- The second line consists of $n$ integers: $s_1, s_2, \ldots, s_n$.
- The third line consists of $n$ integers: $p_1, p_2, \ldots, p_n$.

###Output:
One floating point number -- answer to the problem. If your output is within an absolute or relative difference of $10^{-6}$ from the optimal answer, it will be judged to be correct.

###Constraints 
- $1 \le n, m \le 100000$
- $1 \le t, s_1, \dots, s_n \le 10^9$
- $0 \le p_i \le 1000000$


###Sample Input:
```
3 5 2
10 10 10
220000 330000 440000
```

###Sample Output:
```
5.727279522582
```

###Explanation:
- Suppose we loan Rs. 5 from the first bank on Day 0.
- Then on Day 1, the loan becomes 5 * (1 + 0.22) = 6.1. We then repay Rs. 2, and the amount becomes 4.1.
- On Day 2, the amount increases to 4.1 * 1.22 = 5.002. We then repay Rs. 2 and it becomes Rs. 3.002.
- On Day 3, the amount increases to 3.66244, and after we pay, it decreases to 1.66244.
- On Day 4, it increases to 2.0281768, and on repayment becomes 0.0281768.
- On Day 5, it increases to 0.034375696, and we repay it completely on this day.

Hence, by the end of the 5th day, we have completely repaid all the loans. Hence we can loan Rs. 5 and meet the requirements. But this is not the maximum possible. The maximum possible is 5.727279522582, which we loan from the first bank. 
- At the end of Day 1, it becomes 4.98728101755004. 
- End of Day 2, 4.0844828414110488. 
- End of Day 3, 2.983069066521479536.
- End of Day 4, 1.63934426115620503392.
- On Day 5, after the increase because of interest, the amount becomes 1.9999999986, and we repay it in full after that.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>