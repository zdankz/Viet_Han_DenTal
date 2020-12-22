package com.example.dental.view

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.RecyclerView
import com.example.dental.R
import com.example.dental.entity.Data
import com.example.dental.entity.RecyclerViewAdapter

class list_problem : AppCompatActivity() {

    var list = ArrayList<Data>()

    lateinit var adapter : RecyclerViewAdapter

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_list_problem)

        setupdata()

        adapter = RecyclerViewAdapter(list)
    }

    private fun setupdata()
    {
        for(i in 1..30)
        {
            var data = Data(i)
            list.add(data)
        }
    }
}