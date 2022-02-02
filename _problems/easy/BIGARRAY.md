---
{"category_name":"easy","problem_code":"BIGARRAY","problem_name":"Obtain the Sum","problemComponents":{"constraints":"- $1 \\leq T \\leq 1000$\n- $2 \\leq N \\leq 10^9$\n- $1 \\leq S \\leq 10^{18}$","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- First line will contain $T$, number of testcases. Then the testcases follow.\n- Each testcase contains of a single line of input, two integers $N, S$.\n","inputFormatState":true,"outputFormat":"For each testcase, output the required position or $-1$ in case there is no such position.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n4 8\n5 10\n2 3\n","output":"2\n5\n-1\n","explanation":"**Test Case $1$:** $A[1]+A[3]+A[4]=1+3+4=8$, so $x=2$ is a suitable position.\n\n**Test Case $3$:** There is no suitable position.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/mHabu4803kg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"utkarsh_adm","problem_tester":"","date_added":"12-09-2021","tags":{"0":"math","1":"simple","2":"start11","3":"utkarsh_adm"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BIGARRAY","time":{"view_start_date":1631727002,"submit_start_date":1631727002,"visible_start_date":1631727002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BIGARRAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is given two integers $N, S$.

Consider an array $A$ of size $N$ such that $A[i]=i$ for every $1 \leq i \leq N$.

You are required to find any position $x(1\leq x \leq N)$ such that :

$(A[1]+A[2]+...A[x-1]) + (A[x+1]+A[x+2]+...A[N]) = S$

If there are multiple such positions $x$, print any such position. If there is no such position, print $-1$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>