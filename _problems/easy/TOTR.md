---
{"category_name":"easy","problem_code":"TOTR","problem_name":"Tourist Translations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"anton_lunyov","date_added":"7-09-2012","tags":{"0":"ad","1":"cakewalk","2":"march13","3":"permutation","4":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/TOTR","time":{"view_start_date":1363000538,"submit_start_date":1363000538,"visible_start_date":1363000538,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>A tourist is visiting Byteland. The tourist knows English very well. The language of Byteland is rather different from English. To be exact it differs in following points:
<ul><li>Bytelandian alphabet has the same letters as English one, but possibly different in meaning. Like 'A' in Bytelandian may be 'M' in English. However this does <b>not</b> mean that 'M' in Bytelandian must be 'A' in English. More formally, Bytelindian alphabet is a permutation of English alphabet. It will be given to you and could be any possible permutation. Don't assume any other condition.</li>
<li>People of Byteland don't like to use invisible character for separating words. Hence instead of space (' ') they use underscore ('_'). Other punctuation symbols, like '?', '!' remain the same as in English.</li>
</ul></p>
<p>The tourist is carrying "The dummies guide to Bytelandian", for translation. The book is serving his purpose nicely. But he is addicted to sharing on BaceFook, and shares his numerous conversations in Byteland on it. The conversations are rather long, and it is quite tedious to translate for his English friends, so he asks you to help him by writing a program to do the same.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the length of the conversation, and the string <b>M</b>, denoting the English translation of Bytelandian string <b>"abcdefghijklmnopqrstuvwxyz"</b>. <b>T</b> and <b>M</b> are separated by exactly one space. Then <b>T</b> lines follow, each containing a Bytelandian sentence <b>S</b> which you should translate into English. See constraints for details.</p>

<h3>Output</h3>
<p>For each of the sentence in the input, output its English translation on a separate line. Replace each underscores ('_') with a space (' ') in the output. Each punctuation symbol (see below) should remain the same. Note that the uppercase letters in Bytelandian remain uppercase in English, and lowercase letters remain lowercase. See the example and its explanation for clarity.</p>

<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>M</b> is a permutation of <b>"abcdefghijklmnopqrstuvwxyz"</b></li>
<li>Each sentence is non-empty and contains at most <b>100</b> characters</li>
<li>Each sentence may contain only lowercase letters ('a'-'z'), uppercase letters ('A'-'Z'), underscores ('_') and punctuation symbols: dot ('.'), comma (','), exclamation ('!'), question-mark('?')</li>
</ul></p>

<h3>Example</h3>

<pre>
<b>Input:</b>
5 qwertyuiopasdfghjklzxcvbnm
Ph
Pcssi
Bpke_kdc_epclc_jcijsc_mihyo?
Epcf_kdc_liswhyo_EIED_hy_Vimcvpcn_Zkdvp_siyo_viyecle.
Ipp!

<b>Output:</b>
Hi
Hello
What are these people doing?
They are solving TOTR in Codechef March long contest.
Ohh!
</pre>

<h3>Explanation</h3>
<p>The string "qwertyuiopasdfghjklzxcvbnm" means that 'a' in Bytelandian is 'q' in English, 'b' in Bytelandian is 'w' in English, 'c' in Bytelandian is 'e' in English and so on.<br/>Thus to translate "Ph" (first sentence in example) to English:<br/>1) We find that 'p' in Bytelandian means 'h' in English. So we replace 'P' with 'H'.<br/>2) Then we see that 'h' in Bytelandian means 'i' in English. So we replace 'h' with 'i'.<br/>3) Therefore, the translation is "Hi".</p>
