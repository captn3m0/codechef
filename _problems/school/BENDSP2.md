---
{"category_name":"school","problem_code":"BENDSP2","problem_name":"1 - Cakezoned","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"16-03-2018","tags":{"0":"admin3"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1605438000,"submit_start_date":1605438000,"visible_start_date":1605438000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BENDSP2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chefina loves cakes! $N$ suitors numbered $1\ldots N$ have arrived from across the seven seas to woo her. 

Each of the suitors wishes to impress Chefina, so suitor $i$ has prepared a cake of height $H_i$. To test the suitors, Chefina assigned them $Q$ tasks. Each of the tasks is of one of the following types:

- **$1$ $L$ $R$ $X$:** Increase the heights of all cakes in the range $L$ to $R$ inclusive by $X$, i.e., increase each of $H_L$, $H_{L+1}$, $H_{L+2}\ldots$ $H_R$ by $X$.
- **$2$:** Find the sum of heights of all cakes prepared by odd-numbered suitors.
- **$3$:** Find the sum of heights of all cakes prepared by even-numbered suitors.

Can you help the suitors complete the tasks?


### Input:
- The first line contains an integer $N$, the number of cakes.
- The next line contains $N$ space-separated integers $H_1,H_2,\ldots,H_N$, denoting the heights of the cakes.
- The third line contains an integer $Q$, the number of tasks.
- The next $Q$ lines describe the tasks assigned to the suitors by Chefina.

### Output:

For each task of type $2$ or $3$, display the sum of heights of all cakes prepared by odd or even-numbered suitors, respectively, on a new line.

### Constraints:

- $1 \le N \le 10^5$
- $1 \le Q \le 2 \cdot 10^5$
- $1 \le L \le R \le N$
- $1 \le X,H_i \le 10^8$

### Subtasks:

- **Subtask #$1$ $(10$% of the score$)$:** $1 \le N, Q, X, H_i \le 10^3$.
- **Subtask #$2$ $(10$% of the score$)$:** $1 \le N, Q \le 10^3$.
- **Subtask #$3$ $(80$% of the score$)$:** Original constraints.

### Sample Input:

```
6
2 9 5 2 1 8
5
2
3
1 1 3 2
3
2
```

### Sample Output:

```
8
19
21
12
```

### Explanation:

Initially, 

 - The sum of heights of cakes prepared by odd-numbered suitors is $2+5+1=8$.
 - The sum of heights of cakes prepared by even-numbered suitors is $9+2+8=19$. 

After increasing the heights of cakes prepared by suitors $1$, $2$ and $3$, 

 - The sum of heights of cakes prepared by odd-numbered suitors becomes $4+7+1=12$.
 - The sum of heights of cakes prepared by even-numbered suitors becomes $11+2+8=21$.



<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>