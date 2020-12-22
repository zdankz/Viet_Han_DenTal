package com.example.dental.entity

import android.view.View
import androidx.recyclerview.widget.RecyclerView
import kotlinx.android.synthetic.main.pro_row.view.*

class RecyclerViewAdapter(var list: ArrayList<Data>)
{
    inner  class  ViewHolder(itemView : View): RecyclerView.ViewHolder(itemView){
        var checkbox = itemView.checkbox
    }
}
